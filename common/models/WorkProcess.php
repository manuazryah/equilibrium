<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "work_process".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $UB
 * @property string $DOU
 */
class WorkProcess extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'work_process';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['UB'], 'integer'],
            [['DOU'], 'safe'],
            [['title'], 'string', 'max' => 200],
            [['content'], 'string', 'max' => 70],
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
            'content' => 'Content',
            'UB' => 'Ub',
            'DOU' => 'Dou',
        ];
    }
}
