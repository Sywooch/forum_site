<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "QEditor".
 *
 * @property int $id
 * @property string $question
 * @property string $first
 * @property string $second
 * @property string $third
 * @property string $date
 * @property int $accepted
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'QEditor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question', 'first', 'second', 'third', 'date'], 'required'],
            [['date'], 'safe'],
            [['date'], 'date', 'format' => 'php:Y-m-d'],
            [['date'], 'default', 'value' => date('Y-m-d')],
            [['accepted'], 'integer'],
            [['question'], 'string', 'max' => 100],
            [['first', 'second', 'third'], 'string', 'max' => 25],
           
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question' => 'Вопрос',
            'first' => 'Вариант 1',
            'second' => 'Вариант 2',
            'third' => 'Вариант 3',
            'date' => 'Дата',
            'accepted' => 'Принят/Нет',
        ];
    }
}
