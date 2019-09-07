<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "trees".
 *
 * @property int $id
 * @property string $name
 * @property int $average_height
 */
class Trees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'average_height'], 'required'],
            [['average_height'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'average_height' => 'Average Height',
        ];
    }
}
