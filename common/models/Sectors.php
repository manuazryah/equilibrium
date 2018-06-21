<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sectors".
 *
 * @property int $id
 * @property string $name
 * @property string $canonical_name
 * @property string $main_head
 * @property string $main_content
 * @property string $features
 * @property string $precautions
 * @property string $intelligence
 * @property string $specialization
 * @property string $small_image
 * @property string $main_image
 * @property string $banner_image
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 * @property int $status
 */
class Sectors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sectors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'main_head', 'main_content', 'features'], 'required'],
            [['main_content', 'features', 'specialization', 'precautions', 'intelligence'], 'string'],
            [['CB', 'UB', 'status'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['name', 'main_head'], 'string', 'max' => 200],
            [['small_image', 'banner_image'], 'required', 'on' => 'create'],
//            [['small_image', 'main_image', 'banner_image'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'canonical_name' => 'Canonical Name',
            'main_head' => 'Main Heading',
            'main_content' => 'Main Content',
            'features' => 'Features',
            'specialization' => 'Specialization',
            'precautions' => 'Precautions',
            'intelligence' => 'Intelligence',
            'small_image' => 'Small Image',
            'main_image' => 'Main Image',
            'banner_image' => 'Banner Image',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }
}
