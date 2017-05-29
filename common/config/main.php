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
        'mail' => [
           'class' => 'yii\swiftmailer\Mailer',
           'transport' => [
               'class' => 'Swift_SmtpTransport',
               'host' => 'smtp.gmail.com',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
               'username' => 'shekhar.blisstering@gmail.com',
               'password' => 'Shekhar123$',
               'port' => '587', // Port 25 is a very common port too
               'encryption' => 'tls', // It is often used, check your provider or mail server specs
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
