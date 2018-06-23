<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'podium'],
    'controllerNamespace' => 'app\commands',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'user' => [
            'identityClass' => 'bizley\podium\models\User',
            
            'enableAutoLogin' => true,
        ],
        'authManager'  => [
            'class' => 'yii\rbac\DbManager',
            'db' => $db,
            'itemTable' => '{{%podium_auth_item}}',
            'itemChildTable' => '{{%podium_auth_item_child}}',
            'assignmentTable' => '{{%podium_auth_assignment}}',
            'ruleTable' => '{{%podium_auth_rule}}',
            'cache' => $cache
        ], 
        'db' => $db,
		'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'ayderumerov.com@gmail.com',
                'password' => 'vlqqxgxfhnvovnrc',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
    ],
    'modules' => [
        'rbac' => [
            'class' => 'yii2mod\rbac\Module',
        ],
        
        'podium' => [
            'class' => 'bizley\podium\Podium',
            // 'userComponent' => 'user',
            'rbacComponent' => 'authManager',
            'adminId' => 1,
            'userPasswordField' => 'password'
        ],
    ],

    'params' => $params,
    /*
    'controllerMap' => [
        'fixture' => [ // Fixture generation command line.
            'class' => 'yii\faker\FixtureController',
        ],
    ],
    */
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
