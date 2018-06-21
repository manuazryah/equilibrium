<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $who_we_are
 * @property string $who_we_are_image
 * @property string $our_mission
 * @property string $our_mission_image
 * @property string $our_vision
 * @property string $our_vision_image
 * @property string $why_choose_us
 * @property string $why_choose_us_image
 * @property string $chairman_message
 * @property string $chairman_image
 * @property string $profile
 * @property string $our_core_values
 * @property string $our_certificates
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['who_we_are', 'our_mission', 'our_vision', 'why_choose_us', 'chairman_message', 'our_core_values', 'our_certificates'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['who_we_are', 'our_mission', 'our_vision', 'why_choose_us', 'our_core_values', 'our_certificates','who_we_are_index'], 'required'],
            [['who_we_are_image', 'our_mission_image', 'our_vision_image', 'why_choose_us_image', 'chairman_image', 'profile'], 'string', 'max' => 100],
            [['who_we_are_image', 'our_mission_image', 'our_vision_image', 'why_choose_us_image'], 'required', 'on' => 'create'],
            [['who_we_are_image', 'our_mission_image', 'our_vision_image', 'why_choose_us_image'], 'file', 'extensions' => 'jpg,png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'who_we_are_index' => 'Who We Are for Index',
            'who_we_are' => 'Who We Are',
            'who_we_are_image' => 'Who We Are Image',
            'our_mission' => 'Our Mission',
            'our_mission_image' => 'Our Mission Image',
            'our_vision' => 'Our Vision',
            'our_vision_image' => 'Our Vision Image',
            'why_choose_us' => 'Why Choose Us',
            'why_choose_us_image' => 'Why Choose Us Image',
            'chairman_message' => 'Chairman Message',
            'chairman_image' => 'Chairman Image',
            'profile' => 'Profile',
            'our_core_values' => 'Our Core Values',
            'our_certificates' => 'Our Certificates',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
