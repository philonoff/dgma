<?php

namespace frontend\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $email;
    public $name;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}