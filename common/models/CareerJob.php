<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "career_job".
 *
 * @property int $id
 * @property int $career_id
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $reference
 * @property string $cv
 * @property string $DOC
 * @property int $status
 */
class CareerJob extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'career_job';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['name', 'email', 'mobile'], 'required'],
            [['status'], 'integer'],
            [['DOC'], 'safe'],
            [['name', 'email', 'reference'], 'string', 'max' => 200],
            [['mobile'], 'string', 'max' => 20],
            [['career_id'], 'string'],
            [['cv'], 'file', 'extensions' => 'pdf, docx, doc'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'career_id' => 'Career ID',
            'name' => 'Name',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'reference' => 'Reference',
            'cv' => 'Cv',
            'DOC' => 'Doc',
            'status' => 'Status',
        ];
    }

}
