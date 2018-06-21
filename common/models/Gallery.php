<?php

namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class Gallery extends Model {

    public $package_type;
    public $image;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['package_type', 'image'], 'required'],
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg, gif, png,jpeg', 'maxFiles' => 100],
        ];
    }

}
