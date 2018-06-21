<?php

namespace common\models;

use Yii;
use yii\imagine\Image;
use Imagine\Image\Box;

/**
 * This is the model class for table "careers".
 *
 * @property int $id
 * @property int $sector_id
 * @property string $job_title
 * @property string $company_name
 * @property string $description
 * @property string $image
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 * @property int $status
 */
class Careers extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'careers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['sector_id', 'job_title', 'company_name', 'description'], 'required'],
            [['sector_id', 'CB', 'UB', 'status'], 'integer'],
            [['description'], 'string'],
            [['DOC', 'DOU'], 'safe'],
            [['job_title', 'company_name'], 'string', 'max' => 200],
            [['image'], 'required', 'on' => 'create'],
//            [['image'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'sector_id' => 'Sector',
            'job_title' => 'Job Title',
            'company_name' => 'Company Name',
            'description' => 'Description',
            'image' => 'Logo',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }
     public function upload($file, $model) {
        if (\yii::$app->basePath . '/../uploads') {
            $path = yii::$app->basePath . '/../uploads/careers/' . $model->id . '/image.' . $file->extension;
            
            Image::thumbnail($path, 195, 195)
                    ->save(\yii::$app->basePath . '/../uploads/careers/' . $model->id . '/image.' . $file->extension, ['quality' => 50]);

            Image::thumbnail($path, 90, 90)
                    ->save(\yii::$app->basePath . '/../uploads/careers/' . $model->id . '/small.' . $file->extension, ['quality' => 50]);
//            
            return true;
        }
    }

}
