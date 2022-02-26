<?php

use afzalroq\cms\Module;
use himiklab\yii2\recaptcha\ReCaptchaConfig;
use yii\caching\FileCache;
use yii\i18n\PhpMessageSource;
use yii\rbac\DbManager;

$params = array_merge(
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@url' => $params['siteUrl'],
        '@storageRoot' => $params['storageRoot'],
        '@storageHostInfo' => $params['storageHostInfo'],
    ],
    'vendorPath' => dirname(__DIR__, 2) . '/vendor',
    'timezone' => 'Asia/Tashkent',
    'components' => [
        'cache' => [
            'class' => FileCache::class,
            'cachePath' => Yii::getAlias('@frontend') . '/runtime/cache'
        ],
        'assetManager' => [
//        'bundles' => [
//            JqueryAsset::class => [
//                'jsOptions' => ['position' => View::POS_HEAD]
//            ]
//        ],

            'appendTimestamp' => true,],
        'authManager' => [
            'class' => DbManager::class,
            'itemTable' => '{{%auth_items}}',
            'itemChildTable' => '{{%auth_item_children}}',
            'assignmentTable' => '{{%auth_assignments}}',
            'ruleTable' => '{{%auth_rules}}',
        ],
        'reCaptcha' => YII_ENV_PROD ? [
            'class' => ReCaptchaConfig::class,
            'siteKeyV2' => '6LcfAcUdAAAAAJTcdNOG0rbor1G6LD0GQ1hUmQfp',
            'secretV2' => '6LcfAcUdAAAAAOCGe2bLl9JTkHVmk8wV-vQYx8-f',
        ] : [
            'class' => ReCaptchaConfig::class,
            'siteKeyV2' => '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI',
            'secretV2' => '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe',
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => PhpMessageSource::class,
                    'basePath' => '@common/messages',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
    ],
    'modules' => [
        'cms' => [ // don`t change module key
            'class' => Module::class,
            'path' => $params['storageRoot'], // dirname(__DIR__, 2) . '/storage'
            'host' => $params['storageHostInfo'], // 'https://site.example'
            'fallback' => $params['storageRoot'] . '/fallback.png',
            'languages' => [
                'ru' => [
                    'id' => 0,
                    'name' => 'Русский',
                ],
                'uz' => [
                    'id' => 1,
                    'name' => 'O`zbek tili',
                ],
                'en' => [
                    'id' => 2,
                    'name' => 'Ўзбек тили',
                ],
            ],
            'menuActions' => [ // for add to menu controller actions
                '' => 'Home',
                'site/contacts' => 'Contacts',
            ]
        ],
    ],
];
