<?php

namespace common\models;

use Yii;
use yii\imagine\Image;
use Imagine\Image\Box;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $main_image
 * @property string $banner_image
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 * @property int $status
 */
class Services extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['title', 'content', 'canonical_name'], 'required'],
            [['content'], 'string'],
            [['CB', 'UB', 'status'], 'integer'],
            [['DOC', 'DOU','content_1'], 'safe'],
            [['title'], 'string', 'max' => 200],
            [['main_image', 'banner_image'], 'required', 'on' => 'create'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'main_image' => 'Main Image',
            'banner_image' => 'Banner Image',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }

    public function upload($file, $model, $name) {
        if (\yii::$app->basePath . '/../uploads') {
            $path = yii::$app->basePath . '/../uploads/services/' . $model->id . '/' . $name . '/image.' . $file->extension;
            if ($name == 'main_image') {
                $s1 = '870';
                $s2 = '403';
                $t1 = '150';
                $t2 = '90';
            } else {
                $s1 = '1920';
                $s2 = '740';
                $t1 = '190';
                $t2 = '70';
            }
            Image::thumbnail($path, $s1, $s2)
                    ->save(\yii::$app->basePath . '/../uploads/services/' . $model->id . '/' . $name . '/image.' . $file->extension, ['quality' => 50]);

            Image::thumbnail($path, $t1, $t2)
                    ->save(\yii::$app->basePath . '/../uploads/services/' . $model->id . '/' . $name . '/small.' . $file->extension, ['quality' => 50]);
//            
            return true;
        }
    }

}
