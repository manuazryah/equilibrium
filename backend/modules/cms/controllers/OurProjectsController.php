<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\OurProjects;
use common\models\AboutSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * OurProjectsController implements the CRUD actions for OurProjects model.
 */
class OurProjectsController extends Controller {

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
     * Lists all OurProjects models.
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
     * Displays a single OurProjects model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new OurProjects model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new OurProjects();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $files = UploadedFile::getInstances($model, 'images');
            if (!empty($files)) {
                $this->Upload($files, $model);
            }
            Yii::$app->session->setFlash('success', "New Projects added Successfully");
            $model = new OurProjects();
        } return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing OurProjects model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $files = UploadedFile::getInstances($model, 'images');
            if (!empty($files)) {
                $this->Upload($files, $model);
            }
            Yii::$app->session->setFlash('success', "Projects Updated Successfully");
            return $this->redirect(['update', 'id' => $model->id]);
        } return $this->render('update', [
                    'model' => $model,
        ]);
    }

    public function Upload($files, $model) {
        if ($files != '' && $model != '') {
            $paths = Yii::$app->basePath . '/../uploads/project-gallery/' . $model->id;
            $path = $this->CheckPath($paths);
            foreach ($files as $file) {
                $name = $this->fileExists($path, $file->baseName . '.' . $file->extension, $file, 1);
                $file->saveAs($path . '/' . $name);
            }
            return true;
        } else {
            return false;
        }
    }

    public function CheckPath($paths) {
        if (!is_dir($paths)) {
            mkdir($paths);
        }
        return $paths;
    }

    public function fileExists($path, $name, $file, $sufix) {
        if (file_exists($path . '/' . $name)) {

            $name = basename($path . '/' . $file->baseName, '.' . $file->extension) . '_' . $sufix . '.' . $file->extension;
            return $this->fileExists($path, $name, $file, $sufix + 1);
        } else {
            return $name;
        }
    }

    public function actionRemove($path) {
        if (file_exists($path)) {
            unlink($path);
        }
        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionRemovePath() {
        if (Yii::$app->request->isAjax) {
            $path = $_POST['path'];
            if (file_exists($path)) {
                unlink($path);
            }
        }
    }

    /**
     * Deletes an existing OurProjects model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OurProjects model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OurProjects the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = OurProjects::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
