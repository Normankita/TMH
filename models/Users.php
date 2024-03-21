<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $user_id
 * @property string $Fname
 * @property string $Lname
 * @property string $email
 * @property string $password
 * @property string $nationality
 * @property string|null $where_from
 * @property string|null $destination
 * @property string $card_type
 * @property int $card_num
 * @property string $arrival_date
 * @property string $departure_date
 * @property string $payment_method
 * @property int $in_status
 * @property string $user_type
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Fname', 'Lname', 'email', 'password', 'nationality', 'card_type', 'card_num', 'arrival_date', 'departure_date', 'payment_method', 'in_status', 'user_type'], 'required'],
            [['card_num', 'in_status'], 'integer'],
            [['arrival_date', 'departure_date'], 'safe'],
            [['Fname', 'Lname', 'email', 'nationality', 'payment_method'], 'string', 'max' => 50],
            [['password', 'where_from', 'destination'], 'string', 'max' => 100],
            [['card_type'], 'string', 'max' => 40],
            [['user_type'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'Fname' => 'Fname',
            'Lname' => 'Lname',
            'email' => 'Email',
            'password' => 'Password',
            'nationality' => 'Nationality',
            'where_from' => 'Where From',
            'destination' => 'Destination',
            'card_type' => 'Card Type',
            'card_num' => 'Card Num',
            'arrival_date' => 'Arrival Date',
            'departure_date' => 'Departure Date',
            'payment_method' => 'Payment Method',
            'in_status' => 'In Status',
            'user_type' => 'User Type',
        ];
    }
}
