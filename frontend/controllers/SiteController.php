<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Sectors;
use common\models\Services;
use common\models\ContactForm;
use app\models\UploadForm;
use yii\web\UploadedFile;
use common\models\CareerJob;
use common\models\WorkProcess;

/**
 * Site controller
 */
class SiteController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup', 'chairmans-message', 'subscribe-mail'],
                'rules' => [
                    [
                        'actions' => ['signup', 'chairmans-message', 'subscribe-mail'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout', 'chairmans-message'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        $about_content = \common\models\About::find()->where(['id' => 1])->one();
        $contact_info = \common\models\ContactInfo::find()->where(['id' => 1])->one();
        $home_page_content = \common\models\HomeManagement::find()->where(['id' => 1])->one();
        $work_process = WorkProcess::find()->all();
        $news = \common\models\NewsEvents::find()->where(['type' => 1])->all();
        $events = \common\models\NewsEvents::find()->where(['type' => 2])->all();
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if (isset($_POST['g-recaptcha-response']))
                $captcha = $_POST['g-recaptcha-response'];
            if ($captcha) {
                $model->date = date('Y-m-d');
                if ($model->save()) {
                    $this->sendContactMail($model);
                }
            }
            return $this->refresh();
        }
        return $this->render('index', [
                    'about_content' => $about_content,
                    'contact_info' => $contact_info,
                    'home_page_content' => $home_page_content,
                    'work_process' => $work_process,
                    'news' => $news,
                    'events' => $events,
        ]);
    }

    public function actionChairmansMessage() {
        return $this->render('chairmans');
    }

    public function actionProjects() {
        $our_projects = \common\models\OurProjects::find()->all();
        return $this->render('projects', [
                    'our_projects' => $our_projects,
        ]);
    }

    public function actionProjectGallery($project = NULL) {
        $our_projects = \common\models\OurProjects::find()->where(['canonical_name' => $project])->one();
        return $this->render('projects-gallery', [
                    'our_projects' => $our_projects,
        ]);
    }

    public function actionEvents() {
        $news = \common\models\NewsEvents::find()->where(['type' => 1])->all();
        $events = \common\models\NewsEvents::find()->where(['type' => 2])->all();
        return $this->render('news-events', [
                    'news' => $news,
                    'events' => $events,
        ]);
    }

    /**
     * Displays Sectors page.
     *
     * @return mixed
     */
    public function actionSectors($sector) {
        $sectors = Sectors::find()->where(['status' => 1, 'canonical_name' => $sector])->one();
        return $this->render('sector', ['sectors' => $sectors]);
    }

    /**
     * Displays Services Page.
     *
     * @return mixed
     */
    public function actionServices($service) {
        $services = Services::find()->where(['status' => 1, 'canonical_name' => $service])->one();
        return $this->render('services', ['services' => $services]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact() {
        $contact_info = \common\models\ContactInfo::find()->where(['id' => 1])->one();
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if (isset($_POST['g-recaptcha-response']))
                $captcha = $_POST['g-recaptcha-response'];
            if ($captcha) {
                $model->date = date('Y-m-d');
                if ($model->save()) {
                    $this->sendContactMail($model);
                }
            }
            return $this->refresh();
        } return $this->render('contact', [
                    'model' => $model,
                    'contact_info' => $contact_info,
        ]);
    }

    /**
     * This function send contact message to admin.
     */
    public function sendContactMail($model) {

        $subject = $model->subject;
        $to = "info@eqec.ae";
        $message = $this->renderPartial('contact-mail', ['model' => $model,]);
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n" .
                "From: no-replay@eqec.ae";
        mail($to, $subject, $message, $headers);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        $about_content = \common\models\About::find()->where(['id' => 1])->one();
        $chairmans_message = \common\models\Chairmans::find()->where(['id' => 1])->one();
        $partners = \common\models\Partners::find()->where(['status' => 1])->all();
        return $this->render('about', [
                    'about_content' => $about_content,
                    'chairmans_message' => $chairmans_message,
                    'partners' => $partners,
        ]);
    }

    /**
     * Displays careers Page.
     *
     * @return mixed
     */
    public function actionCareers() {
        $model = new CareerJob;
        $sectors = Sectors::find()->where(['status' => 1])->all();
        if ($model->load(Yii::$app->request->post())) {
            $cv = UploadedFile::getInstance($model, 'cv');
            $model->cv = $cv->extension;
            $model->career_id = yii::$app->EncryptDecrypt->Encrypt('decrypt', $model->career_id);
            if ($model->validate() && $model->save()) {

                if (!empty($cv)) {
                    $this->upload($model, $cv);
                }
                Yii::$app->session->setFlash('success', "New Careers added Successfully");
                $model = new CareerJob;
            }
        }
        return $this->render('careers', [
                    'sectors' => $sectors,
                    'model' => $model
        ]);
    }

    public function Upload($model, $file) {
        if (!is_dir(\Yii::$app->basePath . '/../uploads/cv/' . $model->id . '/')) {
            mkdir(\Yii::$app->basePath . '/../uploads/cv/' . $model->id . '/');
            chmod(\Yii::$app->basePath . '/../uploads/cv/' . $model->id . '/', 0777);
        }
        $file->saveAs(Yii::$app->basePath . '/../uploads/cv/' . $model->id . '/cv.' . $file->extension);
        return TRUE;
    }

    public function actionSubscribeMail() {
        if (Yii::$app->request->isAjax) {
            $email = $_POST['email'];
            if (!empty($email)) {
                $model = new \common\models\EmailSubscription();
                $model->email = $email;
                if ($model->save()) {
                    $subject = 'Newsletter Subscription Enquiry From eqec.ae';
                    $to = "info@eqec.ae";
                    $message = $this->renderPartial('subscribe-mail', ['email' => $email,]);
                    $headers = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n" .
                            "From: no-replay@eqec.ae";
                    mail($to, $subject, $message, $headers);
                    echo json_encode(array('msg' => 'success'));
                } else {
                    echo json_encode(array('msg' => 'failed', 'error' => 'Email already used'));
                }
            }
        }
    }

}
