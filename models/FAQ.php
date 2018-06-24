<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "FAQ".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'FAQ';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'title' => 'Заголовок',
            'content' => 'Текст',
            'created_at' => 'Создан',
            'updated_at' => 'Updated At',
        ];
    }
}
