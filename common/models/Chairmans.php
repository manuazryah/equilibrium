<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "chairmans".
 *
 * @property int $id
 * @property string $title
 * @property string $short_content
 * @property string $content
 * @property string $image
 * @property string $banner_image
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 * @property int $status
 */
class Chairmans extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chairmans';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'short_content', 'content'], 'required'],
            [['content'], 'string'],
            [['CB', 'UB', 'status'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['title'], 'string', 'max' => 100],
            [['short_content'], 'string', 'max' => 200],
//            [['image'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'short_content' => 'Short Content',
            'content' => 'Content',
            'image' => 'Image',
            'banner_image' => 'Banner Image',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }
}
