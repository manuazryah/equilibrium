<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "home_management".
 *
 * @property int $id
 * @property string $about_content
 * @property string $facebook
 * @property string $twitter
 * @property string $instagram
 * @property string $pintrest
 * @property string $linkedin
 * @property string $header_phone
 * @property string $header_email
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $work_process_title1
 * @property string $work_process_title2
 * @property string $work_process_title3
 * @property string $work_process_title4
 * @property string $work_process_content1
 * @property string $work_process_content2
 * @property string $work_process_content3
 * @property string $work_process_content4
 * @property string $DOU
 * @property int $status
 */
class HomeManagement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home_management';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['about_content', 'address', 'work_process_content1', 'work_process_content2', 'work_process_content3', 'work_process_content4','header_email', 'email', 'work_process_title1', 'work_process_title2', 'work_process_title3', 'work_process_title4','header_phone', 'phone','facebook', 'twitter', 'instagram', 'pintrest', 'linkedin','cpmpany_profile_message'], 'required'],
            [['about_content', 'address', 'work_process_content1', 'work_process_content2', 'work_process_content3', 'work_process_content4'], 'string'],
            [['DOU'], 'safe'],
            [['status'], 'integer'],
            [['header_email', 'email'], 'email'],
            [['facebook', 'twitter', 'instagram', 'pintrest', 'linkedin'], 'string', 'max' => 200],
            [['header_phone', 'phone'], 'string', 'max' => 50],
            [['header_email', 'email', 'work_process_title1', 'work_process_title2', 'work_process_title3', 'work_process_title4'], 'string', 'max' => 100],
            [['profile_download'], 'required', 'on' => 'create'],
            [['profile_download'], 'file', 'extensions' => 'pdf'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'about_content' => 'About Content in Footer',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'instagram' => 'Instagram',
            'pintrest' => 'Pintrest',
            'linkedin' => 'Linkedin',
            'header_phone' => 'Header Phone',
            'header_email' => 'Header Email',
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'cpmpany_profile_message' => 'Company Profile Message',
            'work_process_title1' => 'Work Process Title1',
            'work_process_title2' => 'Work Process Title2',
            'work_process_title3' => 'Work Process Title3',
            'work_process_title4' => 'Work Process Title4',
            'work_process_content1' => 'Work Process Content1',
            'work_process_content2' => 'Work Process Content2',
            'work_process_content3' => 'Work Process Content3',
            'work_process_content4' => 'Work Process Content4',
            'DOU' => 'Dou',
            'status' => 'Status',
        ];
    }
}
