<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "our_projects".
 *
 * @property int $id
 * @property string $project_name
 * @property string $client
 * @property string $images
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class OurProjects extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'our_projects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['project_name', 'client'], 'required'],
            [['project_name', 'client'], 'string', 'max' => 1000],
            [['images'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, gif, png,jpeg', 'maxFiles' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'project_name' => 'Project Name',
            'client' => 'Client',
            'images' => 'Images',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

}
