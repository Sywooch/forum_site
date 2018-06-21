<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    // промежуточная моделька
    // класс со свойствами, валидацией и методами
    public $name;
    public $email;
    public $body;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Введите проверочный код?',
            'name' => 'Имя',
            'email' => 'E-mail',
            'body' => 'Отзыв',
        ];
    }

    /**
     * // сохранение в БД
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact(/*$email*/)
    {
        if ($this->validate()) {

            $contact = new Contact();
            $contact->name = $this->name;
            $contact->email = $this->email;
            
            $contact->body = $this->body; 
            if($contact->save()){
                return true;
            }    
        }
        return false;
    }
}
