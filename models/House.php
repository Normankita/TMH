<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "house".
 *
 * @property int $house_id
 * @property string $house_name
 * @property string $size
 */
class House extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'house';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['house_name', 'size'], 'required'],
            [['house_name'], 'string', 'max' => 75],
            [['size'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'house_id' => 'House ID',
            'house_name' => 'House Name',
            'size' => 'Size',
        ];
    }
}
