<?php

use common\models\User;
use mihaildev\elfinder\PathController;
use yii\filters\AccessControl;

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'language' => 'ru',
    'components' => [
        'as access' => [
            'class' => AccessControl::class,
            'except' => ['site/login', 'site/error', 'site/logout'],
            'rules' => [
                [
                    'controllers' => ['site','elfinder','cms/file'],
                    'allow' => true,
                    'roles' => ['moderator'],
                ],
                [
                    'allow' => true,
                    'controllers' => ['cms/items'],
                    'roles' => ['moderator'],
                    'matchCallback' => function ($rule, $action)
                    {
                        $allowed = [
                            'photo-gallery',
                            'photo',
                            'news',
                        ];
                        return in_array(Yii::$app->request->get('slug'), $allowed);
                    },
                ],
                [
                    'allow' => true,
                    'roles' => ['admin']
                ],
            ],
        ],

        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => User::class,
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => PathController::class,
            'access' => ['@'],
            'root' => [
                'baseUrl' => $params['storageHostInfo'],
                'basePath' => '@storageRoot',
                'path' => 'elfinder-files',
                'name' => 'Files',
            ],
        ],
    ],
    'as access' => [
        'class' => AccessControl::class,
        'except' => ['site/login', 'site/error', 'site/logout'],
        'rules' => [
            [
                'allow' => true,
                'roles' => ['@']
            ],
        ],
    ],
    'params' => $params,
];
