<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\BanerImages;
use common\models\BanerImagesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BanerImagesController implements the CRUD actions for BanerImages model.
 */
class BanerImagesController extends Controller {
    
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
     * Lists all BanerImages models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new BanerImagesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BanerImages model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new BanerImages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new BanerImages();

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {

            $courses = UploadedFile::getInstance($model, 'courses');
            $model->courses = $courses->extension;

            $free_resources = UploadedFile::getInstance($model, 'free_resources');
            $model->free_resources = $free_resources->extension;

            $blog = UploadedFile::getInstance($model, 'blog');
            $model->blog = $blog->extension;

            $about = UploadedFile::getInstance($model, 'about');
            $model->about = $about->extension;

            if ($model->validate() && $model->save()) {
                if (!empty($courses) && !empty($free_resources) && !empty($blog) && !empty($about)) {
                    $about_path = Yii::$app->basePath . '/../uploads/banner-images/about';
                    $courses_path = Yii::$app->basePath . '/../uploads/banner-images/courses';
                    $free_resources_path = Yii::$app->basePath . '/../uploads/banner-images/free_resource';
                    $blog_path = Yii::$app->basePath . '/../uploads/banner-images/blog';

                    $size = [
                            ['width' => 100, 'height' => 100, 'name' => small],
                            ['width' => 1349, 'height' => 632, 'name' => image]
                    ];
                }
                if (!empty($about)) {
                    $about->saveAs($about_path . '/' . $model->id . '.' . $about->extension);
                }
                if (!empty($courses))
                    Yii::$app->UploadFile->UploadFile($model, $courses, $courses_path, $size);
                if (!empty($free_resources))
                    Yii::$app->UploadFile->UploadFile($model, $free_resources, $free_resources_path, $size);
                if (!empty($blog))
                    Yii::$app->UploadFile->UploadFile($model, $blog, $blog_path, $size);
                Yii::$app->session->setFlash('success', "New Baner Image added Successfully");
                $model = new BanerImages();
            }
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing BanerImages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $courses_ = $model->courses;
        $free_resource_ = $model->free_resources;
        $blog_ = $model->blog;
        $about_ = $model->about;

        if ($model->load(Yii::$app->request->post() /* && Yii::$app->SetValues->Attributes($model) */)) {
            $size = [
                    ['width' => 100, 'height' => 100, 'name' => 'small'],
                    ['width' => 1349, 'height' => 632, 'name' => 'image']
            ];
            $about_path = Yii::$app->basePath . '/../uploads/banner-images/about';
            $courses_path = Yii::$app->basePath . '/../uploads/banner-images/courses';
            $free_resources_path = Yii::$app->basePath . '/../uploads/banner-images/free_resources';
            $blog_path = Yii::$app->basePath . '/../uploads/banner-images/blog';

            $about = UploadedFile::getInstance($model, 'about');
            if (!empty($about)) {
                $model->about = $about->extension;
            } else {
                $model->about = $about_;
            }

            $courses = UploadedFile::getInstance($model, 'courses');

            if (!empty($courses)) {
                $model->about = $courses->extension;
            } else {
                $model->courses = $courses_;
            }

            $free_resources = UploadedFile::getInstance($model, 'free_resources');
            if (!empty($free_resources)) {
                $model->free_resources = $free_resources->extension;
            } else {
                $model->free_resources = $free_resource_;
            }
            $blog = UploadedFile::getInstance($model, 'blog');
            if (!empty($blog)) {
                $model->blog = $blog->extension;
            } else {
                $model->blog = $blog_;
            }
            if ($model->validate() && $model->save()) {
                if (!empty($about)) {
                    $about->saveAs($about_path . '/' . $model->id . '.' . $about->extension);
                }
                if (!empty($courses))
                    Yii::$app->UploadFile->UploadFile($model, $courses, $courses_path, $size);
                if (!empty($free_resources))
                    Yii::$app->UploadFile->UploadFile($model, $free_resources, $free_resources_path, $size);
                if (!empty($blog))
                    Yii::$app->UploadFile->UploadFile($model, $blog, $blog_path, $size);
                Yii::$app->session->setFlash('success', "Baner Image Updated Successfully");
                return $this->redirect(['update', 'id' => $model->id]);
            }
        }
        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BanerImages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BanerImages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BanerImages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = BanerImages::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
