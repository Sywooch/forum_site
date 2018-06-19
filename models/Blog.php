<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $text
 * @property int $userId
 * @property int $isAdmin
 * @property string $title
 * @property int $comments
 * @property int $views
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
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['text', 'userId', 'title'], 'required'],
            [['text'], 'string'],
            [['userId', 'isAdmin', 'comments', 'views'], 'integer'],
            [['title'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'text' => 'Text',
            'userId' => 'User ID',
            'isAdmin' => 'Is Admin',
            'img' => 'Img',
            'title' => 'Title',
            'comments' => 'Comments',
            'views' => 'Views',
        ];
    }
}
