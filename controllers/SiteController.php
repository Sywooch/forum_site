<?php

namespace app\controllers;

use bizley\podium\Podium;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Question;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Contact;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new Question();
        $model->date = date('Y-m-d');
        $model->accepted = 0; 
        viewError($model);
        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                Yii::$app->session->setFlash('success');
                return $this->refresh();}       
            else{ 
                Yii::$app->session->setFlash('error');
            }
        }                
        
        return $this->render('index',[
            'model' => $model]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/site/index');
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {        
        Podium::getInstance()->user->logout();
        return $this->redirect('/site/index');
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        // Отправка отзыва
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(/*Yii::$app->params['adminEmail']*/)) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        // Отображение имеющихся отзывов
        $contacts = Contact::find()->all();
        return $this->render('contact', [
            'model' => $model,
            'contacts' => $contacts,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Registernew user.
     *
     * @return string
     */
    public function actionRegistration()
    {
        return $this->render('registration');
    }
}
