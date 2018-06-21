<?php

namespace common\models;

use Yii;
use yii\imagine\Image;
use Imagine\Image\Box;

/**
 * This is the model class for table "business_association".
 *
 * @property int $id
 * @property string $image
 * @property string $content
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 * @property int $status
 */
class BusinessAssociation extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'business_association';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['content'], 'required'],
            [['content'], 'string'],
            [['CB', 'UB', 'status'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
//            [['image'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'content' => 'Content',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }
    public function upload($file, $model) {
        if (\yii::$app->basePath . '/../uploads') {
            $path = yii::$app->basePath . '/../uploads/business/' . $model->id . '/image.' . $file->extension;
            
            Image::thumbnail($path, 600, 680)
                    ->save(\yii::$app->basePath . '/../uploads/business/' . $model->id . '/image.' . $file->extension, ['quality' => 50]);

            Image::thumbnail($path, 100, 120)
                    ->save(\yii::$app->basePath . '/../uploads/business/' . $model->id . '/small.' . $file->extension, ['quality' => 50]);
//            
            return true;
        }
    }

}
