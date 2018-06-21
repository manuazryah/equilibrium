<?php

namespace backend\controllers;

use Yii;
use common\models\Careers;
use common\models\CareersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * CareersController implements the CRUD actions for Careers model.
 */
class CareersController extends Controller {
    
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
     * Lists all Careers models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new CareersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Careers model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Careers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Careers();

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $main_image = UploadedFile::getInstance($model, 'image');
            $model->image = $main_image->extension;
            if ($model->validate() && $model->save()) {

                if (!empty($main_image)) {
                    if ($this->upload($model, $main_image)) {
                        $model->upload($main_image, $model);
                    }
                }
                Yii::$app->session->setFlash('success', "New Careers added Successfully");
            }
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Careers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $main_image = UploadedFile::getInstance($model, 'image');
            if (!empty($main_image)) {
                $model->image = $main_image->extension;
            }
            if ($model->validate() && $model->save()) {

                if (!empty($main_image)) {
                    if ($this->upload($model, $main_image)) {
                        $model->upload($main_image, $model);
                    }
                }
                Yii::$app->session->setFlash('success', "Careers updated Successfully");
            }
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    public function Upload($model, $file) {
        if (!is_dir(\Yii::$app->basePath . '/../uploads/careers/' . $model->id . '/')) {
            mkdir(\Yii::$app->basePath . '/../uploads/careers/' . $model->id . '/');
            chmod(\Yii::$app->basePath . '/../uploads/careers/' . $model->id . '/', 0777);
        }
        $file->saveAs(Yii::$app->basePath . '/../uploads/careers/' . $model->id . '/image.' . $file->extension);
        return TRUE;
    }

    /**
     * Deletes an existing Careers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Careers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Careers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Careers::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
