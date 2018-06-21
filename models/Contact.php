<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support".
 *
 * @property int $id
 * @property string $name
 * @property int $email
 * @property string $body
 * @property string $date
 * МОдель контакт, связана с БД
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     * имя таблицы
     */
    public static function tableName()
    {
        return 'support';
    }

    /**
     * {@inheritdoc}
     * ВАлидация
     */
    public function rules()
    {
        return [
            [['name', 'email', 'body'], 'required'],
            [['body'], 'string'],
            [['date'], 'safe'],
            [['date'], 'date', 'format' => 'php:Y-m-d'],
            [['date'], 'default', 'value' => date('Y-m-d')],
            [['name', 'email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'E-mail',
            'body' => 'Отзыв',
        ];
    }
}
