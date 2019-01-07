<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'LE_xkiDMqmJG1W9KiWBiVc8AUGQJkRD1',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
		'allowedIPs' => ['*'],
        'generators' => [ 
        'kouoslModule' => [
        'class' => 'kouosl\gii\module\Generator', 
        
        ]],
    ];
}

return $config;
