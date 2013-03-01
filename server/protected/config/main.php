<?php

return array(
	'basePath' => __DIR__ . DIRECTORY_SEPARATOR . '..',
	'name' => 'forum',
    'timeZone' => 'Asia/Shanghai',

	'preload' => array('log'),

	'import' => array(
		'application.models.*',
		'application.components.base.*',
		'application.components.utils.*',
		'application.components.api.*',
	),

	'modules' => array(
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => '123',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters' => array('127.0.0.1','::1'),
		),
	),

	'components' => array(
		'user' => array(
            'class' => 'WebUser',
			'allowAutoLogin' => false,
		),
        'authManager' => array(
            'class' => 'AuthManager',
            'authFile' => __DIR__ . '/../data/auth.php',
            'defaultRoles' => array('guest'),
        ),
        
		'urlManager' => array(
			'urlFormat' => 'path',
			'rules' => array(

                // RESTful API patterns
                array('site/login', 'pattern' => 'api/login', 'verb' => 'POST'),
                array('site/logout', 'pattern' => 'api/logout', 'verb' => 'DELETE'),
                array('site/register', 'pattern' => 'api/register', 'verb' => 'POST'),
                array('site/resetPassword', 'pattern' => 'api/resetPassword', 'verb' => 'PUT'),

                array('<controller>/list', 'pattern' => 'api/<controller:\w+>s', 'verb' => 'GET'),
                array('<controller>/create', 'pattern' => 'api/<controller:\w+>s', 'verb' => 'POST'),
                array('<controller>/read', 'pattern' => 'api/<controller:\w+>/<id:\d+>', 'verb' => 'GET'),
                array('<controller>/update', 'pattern' => 'api/<controller:\w+>/<id:\d+>', 'verb' => 'PUT'),
                array('<controller>/delete', 'pattern' => 'api/<controller:\w+>/<id:\d+>', 'verb' => 'DELETE'),

                // other
                //'' => 'site/error',
                //'<controller:\w+>' => 'error/index',
			),
		),

		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=teaconf',
			'emulatePrepare' => true,
            'enableProfiling' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
            'tablePrefix' => '',
		),

        'errorHandler' => array(
            'errorAction' => 'site/error',
		),

		'log' => array(
			'class' => 'CLogRouter',
			'routes' => array(
				array(
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				),
				/*
				array(
					'class' => 'CWebLogRoute',
				),
				*/
			),
		),
	),

	'params' => array(
        'time' => array(
            'format' => 'ago',
        ),
		'adminEmail' => 'webmaster@example.com',
	),
);
