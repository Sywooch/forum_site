<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'language' => 'ru-RU',
	'layout' => 'kaso',
    'charset' => 'utf-8',
    'name' => 'Клевер - Игра c Призами',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'podium'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'teO4a038nnpAhdLN8V3_V__vWOc2HqGi',
            'baseUrl' => ''
        ],
        'cache' => [
            'class'        => 'yii\caching\FileCache',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                // '' => 'uzer/view',
                '<action>' => '<controller>/<action>',
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
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
			'access' => ['@'],
			'root' => [
                'baseUrl'=>'@web',
                'basePath'=>'@webroot',
				'path' => 'upload/global',
				'name' => 'Global'
			],
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
