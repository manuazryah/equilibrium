<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\Services;
use common\models\ServicesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * ServicesController implements the CRUD actions for Services model.
 */
class ServicesController extends Controller {
    
    
    public function beforeAction($action) {
        if (!parent::beforeAction($action)) {
            return false;
        }
        if (Yii::$app->user->isGuest) {
            $this->redirect(['/site/index']);
            return false;
        }
        return true;
    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Services models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ServicesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Services model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Services model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Services();

        $model->setScenario('create');
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $model->canonical_name = Yii::$app->request->post()['Services']['canonical_name'];
            $main_image = UploadedFile::getInstance($model, 'main_image');
            $banner_image = UploadedFile::getInstance($model, 'banner_image');
            $model->main_image = $main_image->extension;
            $model->banner_image = $banner_image->extension;
            if ($model->validate() && $model->save()) {

                if (!empty($main_image)) {
                    $name = 'main_image';
                    if ($this->upload($model, $main_image, $name)) {
                        $model->upload($main_image, $model, $name);
                    }
                }
                if (!empty($banner_image)) {
                    $name = 'banner_image';
                    if ($this->upload($model, $banner_image, $name)) {
                        $model->upload($banner_image, $model, $name);
                    }
                }
                Yii::$app->session->setFlash('success', "New Services added Successfully");
            } else {
//                var_dump($model->validat());exit;
            }
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    public function Upload($model, $file, $name) {
        if (!is_dir(\Yii::$app->basePath . '/../uploads/services/' . $model->id)) {
            mkdir(\Yii::$app->basePath . '/../uploads/services/' . $model->id);
            chmod(\Yii::$app->basePath . '/../uploads/services/' . $model->id, 0777);
        }
        if (!is_dir(\Yii::$app->basePath . '/../uploads/services/' . $model->id . '/' . $name . '/')) {
            mkdir(\Yii::$app->basePath . '/../uploads/services/' . $model->id . '/' . $name . '/');
            chmod(\Yii::$app->basePath . '/../uploads/services/' . $model->id . '/' . $name . '/', 0777);
        }
        $file->saveAs(Yii::$app->basePath . '/../uploads/services/' . $model->id . '/' . $name . '/image.' . $file->extension);
        return TRUE;
    }

    /**
     * Updates an existing Services model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $model->canonical_name = Yii::$app->request->post()['Services']['canonical_name'];
            $main_image = UploadedFile::getInstance($model, 'main_image');
            $banner_image = UploadedFile::getInstance($model, 'banner_image');
            $model->main_image = !empty($main_image) ? $main_image->extension : $model->main_image;
            $model->banner_image = !empty($banner_image) ? $banner_image->extension : $model->banner_image;
            if ($model->validate() && $model->save()) {

                if (!empty($main_image)) {
                    $name = 'main_image';
                    if ($this->upload($model, $main_image, $name)) {
                        $model->upload($main_image, $model, $name);
                    }
                }
                if (!empty($banner_image)) {
                    $name = 'banner_image';
                    if ($this->upload($model, $banner_image, $name)) {
                        $model->upload($banner_image, $model, $name);
                    }
                }
                Yii::$app->session->setFlash('success', "Services updated Successfully");
            } 
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Services model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Services model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Services the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Services::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
