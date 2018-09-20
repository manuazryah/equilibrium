<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news_events".
 *
 * @property int $id
 * @property string $image
 * @property int $type 1->News , 2->Events
 * @property string $title
 * @property string $canonical_name
 * @property string $description
 * @property string $date
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class NewsEvents extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'news_events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['type', 'status', 'CB', 'UB'], 'integer'],
            [['description'], 'string'],
            [['date', 'DOC', 'DOU'], 'safe'],
            [['title', 'canonical_name', 'description'], 'required'],
            [['image'], 'string', 'max' => 100],
            [['title', 'canonical_name'], 'string', 'max' => 1000],
            [['image'], 'required', 'on' => 'create'],
            [['image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'type' => 'Type',
            'title' => 'Title',
            'canonical_name' => 'Canonical Name',
            'description' => 'Description',
            'date' => 'Date',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

}
