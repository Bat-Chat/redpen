<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),

    // set target language to be Russian
    'language' => 'ru-RU',
    
    // set source language to be English
    'sourceLanguage' => 'en-US',

    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '3eB5yV-8v22vAVEuldmecy9-y7eOGjKK',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => ['comment', 'project'],
                    // 'extraPatterns' => [
                    //     'DELETE <controller:[\w-]+>/<id:\d+>' => '<controller>/delete',
                    //     'DELETE <controller:\w+>/<id:\d+>' => '<controller>/delete',
                    // ],
                    'pluralize' => false
                ],
                // [
                //     'class' => 'yii\rest\UrlRule',
                //     'pattern' => 'comment/<id:\d+>',
                //     'route' => 'comment/delete',
                //     'pluralize' => false,
                // ],
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'i18n' => [
            'translations' => [
                'comment*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'comment' => 'comment.php',
                    ],
                ],
                'project*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'project' => 'project.php',
                    ],
                ],
            ],
        ],
    ],
    'params' => $params,
];
