<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\About;
use common\models\AboutSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * AboutController implements the CRUD actions for About model.
 */
class AboutController extends Controller {
    
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
     * Lists all About models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new AboutSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single About model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new About model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new About();
        $model->setScenario('create');

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $who_we_are_image = UploadedFile::getInstance($model, 'who_we_are_image');
            $model->who_we_are_image = $who_we_are_image->extension;
            $our_mission_image = UploadedFile::getInstance($model, 'our_mission_image');
            $model->our_mission_image = $our_mission_image->extension;
            $our_vision_image = UploadedFile::getInstance($model, 'our_vision_image');
            $model->our_vision_image = $our_vision_image->extension;
            $why_choose_us_image = UploadedFile::getInstance($model, 'why_choose_us_image');
            $model->why_choose_us_image = $why_choose_us_image->extension;
            if ($model->validate() && $model->save()) {
                $this->Upload($model, $who_we_are_image, $our_mission_image, $our_vision_image, $why_choose_us_image);
                Yii::$app->session->setFlash('success', "About Content added Successfully");
            }
        } return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /*
     * Upload images
     */

    public function Upload($model, $who_we_are_image, $our_mission_image, $our_vision_image, $why_choose_us_image) {
        $path = Yii::$app->basePath . '/../uploads/about/';
        if (!empty($who_we_are_image)) {
            $who_we_are_image->saveAs($path . 'who_we_are_image.' . $who_we_are_image->extension);
        }
        if (!empty($our_mission_image)) {
            $our_mission_image->saveAs($path . 'our_mission_image.' . $our_mission_image->extension);
        }
        if (!empty($our_vision_image)) {
            $our_vision_image->saveAs($path . 'our_vision_image.' . $our_vision_image->extension);
        }
        if (!empty($why_choose_us_image)) {
            $why_choose_us_image->saveAs($path . 'why_choose_us_image.' . $why_choose_us_image->extension);
        }
        return TRUE;
    }

    /**
     * Updates an existing About model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $who_we_are_image_ = $model->who_we_are_image;
        $our_mission_image_ = $model->our_mission_image;
        $our_vision_image_ = $model->our_vision_image;
        $why_choose_us_image_ = $model->why_choose_us_image;

        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $who_we_are_image = UploadedFile::getInstance($model, 'who_we_are_image');
            $our_mission_image = UploadedFile::getInstance($model, 'our_mission_image');
            $our_vision_image = UploadedFile::getInstance($model, 'our_vision_image');
            $why_choose_us_image = UploadedFile::getInstance($model, 'why_choose_us_image');
            $model->why_choose_us_image = $why_choose_us_image->extension;
            if (!empty($who_we_are_image)) {
                $model->who_we_are_image = $who_we_are_image->extension;
            } else {
                $model->who_we_are_image = $who_we_are_image_;
            }
            if (!empty($our_mission_image)) {
                $model->our_mission_image = $our_mission_image->extension;
            } else {
                $model->our_mission_image = $our_mission_image_;
            }
            if (!empty($our_vision_image)) {
                $model->our_vision_image = $our_vision_image->extension;
            } else {
                $model->our_vision_image = $our_vision_image_;
            }
            if (!empty($why_choose_us_image)) {
                $model->why_choose_us_image = $why_choose_us_image->extension;
            } else {
                $model->why_choose_us_image = $why_choose_us_image_;
            }
            if ($model->validate() && $model->save()) {
                $this->Upload($model, $who_we_are_image, $our_mission_image, $our_vision_image, $why_choose_us_image);
                Yii::$app->session->setFlash('success', "About Content Updated Successfully");
            }
            Yii::$app->session->setFlash('success', "Slider Updated Successfully");
            return $this->redirect(['update', 'id' => $model->id]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing About model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the About model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return About the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = About::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
