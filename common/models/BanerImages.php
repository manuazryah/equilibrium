<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "baner_images".
 *
 * @property integer $id
 * @property string $about
 * @property string $courses
 * @property string $free_resources
 * @property string $blog
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 */
class BanerImages extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'baner_images';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['about', 'courses', 'free_resources', 'blog'], 'string', 'max' => 200],
            [['courses', 'free_resources', 'blog'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
            [['about'], 'file', 'extensions' => 'mp4,3gp,mov,m4v,mpeg,mpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'about' => 'About',
            'courses' => 'Courses',
            'free_resources' => 'Free Resources',
            'blog' => 'Blog',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

}
