<?php

use Da\QrCode\Component\QrCodeComponent;

return [
    'id' => 'yii2-qr-test-web',
    'basePath' => dirname(__DIR__),
    'language' => 'en-US',
    'aliases' => [
        '@tests' => dirname(__DIR__, 2),
        '@vendor' => VENDOR_DIR,
        '@bower' => VENDOR_DIR . '/bower',
    ],
    'components' => [
        'qr' => [
            'class' => QrCodeComponent::class,
        ],
        'assetManager' => [
            'basePath' => __DIR__ . '/../assets',
        ],
        'mailer' => [
            'useFileTransport' => true,
        ],
        'urlManager' => [
            'showScriptName' => true,
        ],
        'request' => [
            'cookieValidationKey' => 'test',
            'enableCsrfValidation' => false,
        ]
    ],
    'params' => [],
];
