<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\BusinessAssociation;
use common\models\BusinessAssociationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * BusinessAssociationController implements the CRUD actions for BusinessAssociation model.
 */
class BusinessAssociationController extends Controller {
    
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
     * Lists all BusinessAssociation models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new BusinessAssociationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BusinessAssociation model.
     * @param integer $id
     * @return mixed
     */
//    public function actionView($id) {
//        return $this->render('view', [
//                    'model' => $this->findModel($id),
//        ]);
//    }

    /**
     * Creates a new BusinessAssociation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
//    public function actionCreate() {
//        $model = new BusinessAssociation();
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        } else {
//            return $this->render('create', [
//                        'model' => $model,
//            ]);
//        }
//    }

    /**
     * Updates an existing BusinessAssociation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $main_image = UploadedFile::getInstance($model, 'image');
            $model->image = !empty($main_image) ? $main_image->extension : $model->image;
            if ($model->validate() && $model->save()) {

                if (!empty($main_image)) {
                    if ($this->upload($model, $main_image)) {
                        $model->upload($main_image, $model);
                    }
                }
                Yii::$app->session->setFlash('success', "Bussiness association updated Successfully");
            }
            return $this->redirect(['update', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    public function Upload($model, $file) {
        if (!is_dir(\Yii::$app->basePath . '/../uploads/business/' . $model->id . '/')) {
            mkdir(\Yii::$app->basePath . '/../uploads/business/' . $model->id . '/');
            chmod(\Yii::$app->basePath . '/../uploads/business/' . $model->id . '/', 0777);
        }
//        if (!is_dir(\Yii::$app->basePath . '/../uploads/business/' . $model->id . '/' . $name . '/')) {
//            mkdir(\Yii::$app->basePath . '/../uploads/business/' . $model->id . '/' . $name . '/');
//            chmod(\Yii::$app->basePath . '/../uploads/business/' . $model->id . '/' . $name . '/', 0777);
//        }
        $file->saveAs(Yii::$app->basePath . '/../uploads/business/' . $model->id . '/image.' . $file->extension);
        return TRUE;
    }

    /**
     * Deletes an existing BusinessAssociation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
//    public function actionDelete($id) {
//        $this->findModel($id)->delete();
//
//        return $this->redirect(['index']);
//    }

    /**
     * Finds the BusinessAssociation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BusinessAssociation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = BusinessAssociation::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
