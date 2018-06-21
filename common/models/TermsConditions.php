<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "terms_conditions".
 *
 * @property int $id
 * @property string $section1
 * @property string $section2
 * @property string $section3
 * @property string $section4
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class TermsConditions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'terms_conditions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section1', 'section2', 'section3', 'section4'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'section1' => 'Section1',
            'section2' => 'Section2',
            'section3' => 'Section3',
            'section4' => 'Section4',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
