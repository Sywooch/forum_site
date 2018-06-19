<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support".
 *
 * @property int $id
 * @property string $name
 * @property int $email
 * @property string $subject
 * @property string $body
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body'], 'required'],
            [['body'], 'string'],
            [['name', 'email'], 'string', 'max' => 50],
            [['subject'], 'string', 'max' => 100],
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
            'email' => 'Майл',
            'subject' => 'Тема',
            'body' => 'Отзыв',
        ];
    }
}
