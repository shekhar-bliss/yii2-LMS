<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views' => '@app/views/user'
                ],
            ],
        ],
    ],
    'modules' => [
		    'user' => [
		        'class' => 'dektrium\user\Module',
                'modelMap' => [
                    'RegistrationForm' => 'app\models\RegistrationForm',
                    'User' => 'app\models\User',
                ]
		    ],
		],
];
