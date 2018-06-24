<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $text
 * @property string $title
 * @property string $img
 * @property string $date
 * @property string $user_id
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @var UploadedFile file attribute
     */
    public $imgFile;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            
            [['text', 'title'], 'required'],
            [['text'], 'string'],
            [['title', 'img'], 'string', 'max' => 100],
            [['imgFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['date'], 'safe'],
            [['user_id'], 'integer'],
            [['date'], 'date', 'format' => 'php:Y-m-d'],
            [['date'], 'default', 'value' => date('Y-m-d')],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'text' => 'Текст',
            'title' => 'Заголовок',
            'img' => 'Изображение',
            'imgFile' => ' Нажмите сюда, чтобы добавить изображение',
        ];
    }
}
