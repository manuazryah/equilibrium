<?php

namespace backend\controllers;

use Yii;
use common\models\Chairmans;
use common\models\ChairmansSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ChairmansController implements the CRUD actions for Chairmans model.
 */
class ChairmansController extends Controller {
    
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
     * Lists all Chairmans models.
     * @return mixed
     */
//    public function actionIndex() {
//        $searchModel = new ChairmansSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//
//        return $this->render('index', [
//                    'searchModel' => $searchModel,
//                    'dataProvider' => $dataProvider,
//        ]);
//    }

    /**
     * Displays a single Chairmans model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Chairmans model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Chairmans();

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
           $image = UploadedFile::getInstance($model, 'image');
            $banner_image = UploadedFile::getInstance($model, 'banner_image');
            if (!empty($image)) {
                $model->image = $image->extension;
            }
            if (!empty($banner_image)) {
                $model->banner_image = $banner_image->extension;
            }
            if ($model->validate() && $model->save()) {
                if (!empty($image)) {
                    $path = Yii::$app->basePath . '/../uploads/chairman/' . $model->id . '/';
                    $size = [
                        ['width' => 100, 'height' => 75, 'name' => 'small'],
                        ['width' => 468, 'height' => 350, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                }
                if (!empty($banner_image)) {
                    $path = Yii::$app->basePath . '/../uploads/chairman/banner/';
                    $size1 = [
                        ['width' => 100, 'height' => 35, 'name' => 'banner_small'],
                        ['width' => 1300, 'height' => 390, 'name' => 'banner_image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $banner_image, $path, $size1);
                }
            }
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Chairmans model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'image');
            $banner_image = UploadedFile::getInstance($model, 'banner_image');
            if (!empty($image)) {
                $model->image = $image->extension;
            }
            if (!empty($banner_image)) {
                $model->banner_image = $banner_image->extension;
            }
            if ($model->validate() && $model->save()) {
                if (!empty($image)) {
                    $path = Yii::$app->basePath . '/../uploads/chairman/' . $model->id . '/';
                    $size = [
                        ['width' => 100, 'height' => 75, 'name' => 'small'],
                        ['width' => 468, 'height' => 350, 'name' => 'image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                }
                if (!empty($banner_image)) {
                    $path = Yii::$app->basePath . '/../uploads/chairman/banner/';
                    $size1 = [
                        ['width' => 100, 'height' => 35, 'name' => 'banner_small'],
                        ['width' => 1300, 'height' => 390, 'name' => 'banner_image'],
                    ];
                    Yii::$app->UploadFile->UploadFile($model, $banner_image, $path, $size1);
                }
            }
            return $this->render('update', [
                        'model' => $model,
            ]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Chairmans model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */

    /**
     * Finds the Chairmans model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Chairmans the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Chairmans::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
