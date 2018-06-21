<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\Sectors;
use common\models\SectorsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SectorsController implements the CRUD actions for Sectors model.
 */
class SectorsController extends Controller {
    
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
     * Lists all Sectors models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new SectorsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sectors model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Sectors model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Sectors();
        $model->setScenario('create');

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $model->canonical_name = Yii::$app->request->post()['Sectors']['canonical_name'];
            $model->precautions = Yii::$app->request->post()['Sectors']['precautions'];
            $model->intelligence = Yii::$app->request->post()['Sectors']['intelligence'];
            $small_image = UploadedFile::getInstance($model, 'small_image');
            $main_image = UploadedFile::getInstance($model, 'main_image');
            $banner_image = UploadedFile::getInstance($model, 'banner_image');
            $model->small_image = $small_image->extension;
            $model->main_image = $main_image->extension;
            $model->banner_image = $banner_image->extension;
            if ($model->validate() && $model->save()) {
                if (!empty($small_image)) {
                    $path = Yii::$app->basePath . '/../uploads/sectors/' . $model->id . '/small/';
                    $size = [
                        ['width' => 150, 'height' => 90, 'name' => 'small'],
                        ['width' => 960, 'height' => 540, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $small_image, $path, $size);
                }
                if (!empty($main_image)) {
                    $path = Yii::$app->basePath . '/../uploads/sectors/' . $model->id . '/main/';
                    $size = [
                        ['width' => 150, 'height' => 90, 'name' => 'small'],
                        ['width' => 1024, 'height' => 683, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $main_image, $path, $size);
                }
                if (!empty($banner_image)) {
                    $path = Yii::$app->basePath . '/../uploads/sectors/' . $model->id . '/banner/';
                    $size = [
                        ['width' => 150, 'height' => 90, 'name' => 'small'],
                        ['width' => 1024, 'height' => 683, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $banner_image, $path, $size);
                }
                Yii::$app->session->setFlash('success', "New Sector added Successfully");
            }
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Sectors model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $model->canonical_name = Yii::$app->request->post()['Sectors']['canonical_name'];
            $model->precautions = Yii::$app->request->post()['Sectors']['precautions'];
            $model->intelligence = Yii::$app->request->post()['Sectors']['intelligence'];
            $small_image = UploadedFile::getInstance($model, 'small_image');
            $main_image = UploadedFile::getInstance($model, 'main_image');
            $banner_image = UploadedFile::getInstance($model, 'banner_image');
            $model->small_image = !empty($small_image) ? $small_image->extension : $model->small_image;
            $model->main_image = !empty($main_image) ? $main_image->extension : $model->main_image;
            $model->banner_image = !empty($banner_image) ? $banner_image->extension : $model->banner_image;
            if ($model->validate() && $model->save()) {
                if (!empty($small_image)) {
                    $path = Yii::$app->basePath . '/../uploads/sectors/' . $model->id . '/small/';
                    $size = [
                        ['width' => 150, 'height' => 90, 'name' => 'small'],
                        ['width' => 960, 'height' => 540, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $small_image, $path, $size);
                }
                if (!empty($main_image)) {
                    $path = Yii::$app->basePath . '/../uploads/sectors/' . $model->id . '/main/';
                    $size = [
                        ['width' => 150, 'height' => 90, 'name' => 'small'],
                        ['width' => 1024, 'height' => 683, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $main_image, $path, $size);
                }
                if (!empty($banner_image)) {
                    $path = Yii::$app->basePath . '/../uploads/sectors/' . $model->id . '/banner/';
                    $size = [
                        ['width' => 150, 'height' => 90, 'name' => 'small'],
                        ['width' => 1024, 'height' => 683, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $banner_image, $path, $size);
                }
                Yii::$app->session->setFlash('success', "New Sector added Successfully");
            }
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Sectors model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sectors model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sectors the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Sectors::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
