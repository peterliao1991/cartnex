<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    //'onBeginRequest' => array('Configuration1', 'initApp'),
    // preloading 'log' component
    'preload' => array('log',
        'bootstrap',),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.extentions.*',
    ),
	'timeZone' => 'Asia/Calcutta',
   	'modules'=>array(
	
	),
    'behaviors' => array(
        'onBeginRequest' => array(
            'class' => 'application.components.BeginRequestBehavior'
        ),
    ),
    'language' => 'en',
    //'constants'=>'',
    // application components
    'components' => array(
		'easyImage' => array(
		'class' => 'application.extensions.easyimage.EasyImage',
		),
        'user' => array(
            // enable cookie-based authentication
            'loginUrl'=>array('account/login'),
            'allowAutoLogin' => true,
        ),
		'cache' => array(
            'class' => 'CFileCache',
                ),
        'bootstrap' => array(
            'class' => 'application.extensions.bootstrap.components.Bootstrap',
        //'responsiveCss'=>false,
        ),
        'cartRules' => array(
            'class' => 'application.components.CartRules',
        ),
        'flash' => array(
            'class' => 'application.components.Flashmessages',
        ),
        /*('constants'=>''
            ),*/
		
		'category' => array(
            //'class' => 'application.components.CategoryClass',
			'class' => 'application.components.CategoryComponentClass',
        ),
		'page' => array(
            'class' => 'application.components.PageClass',
        ),
		'product' => array(
            'class' => 'application.components.ProductClass',
        ),
		'cart' => array(
            'class' => 'application.components.Cart',
        ),
		'brand' => array(
            'class' => 'application.components.BrandClass',
        ),
		'order' => array(
            'class' => 'application.components.OrderClass',
        ),
		'customer' => array(
            'class' => 'application.components.CustomerClass',
        ),
        'shipping' => array(
            'class' => 'application.components.Shipping',
        ),
        'payment' => array(
            'class' => 'application.components.Payment',
        ),
		'tax' => array(
            'class' => 'application.components.TaxClass',
        ),
        'currency' => array(
            'class' => 'application.components.Formatter',
        ),
        'imageSize' => array(
            'class' => 'application.components.ThemeSizes',
        ),
        /*'rating' => array(
            'class' => 'application.extensions.rating.rating',
        ),*/
        'captcha' => array(
            'class' => 'application.extensions.captcha.captcha',
        ),
        'config' => array(
            'class' => 'application.components.Config',
        ),
        'image' => array(
            'class' => 'application.extensions.images.Resize',
        ),
        'module' => array(
            'class' => 'application.components.Module',
        ),
        // uncomment the following to enable URLs in path-format
        /**/
        'urlManager' => array(
            //'urlFormat' => 'path',
			'urlFormat' => 'get',
            'showScriptName' => true,
            //'appendParams'=>false,
            'rules' => array(
                '<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',
            /* '<controller:\w+>/<action:\w+>/*'=>'<controller>/<action>',
              '<controller:\w+>/<action:\w+>/<page:\d+>'=>'<controller>/<action>',
              '<controller:\w+>/<id:\d+>'=>'<controller>/view',
              '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
              '<controller:\w+>/<action:\w+>'=>'<controller>/<action>', */
            ),
        ),
        // uncomment the following to use a MySQL database
        /**/
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=cartnex',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'tablePrefix' => 'r_',
			'schemaCachingDuration' => 1800,
            'enableProfiling' => false, //for query profiling
            'enableParamLogging' => false, //for query profiling
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                    'class' => 'CProfileLogRoute',
                ),
            // uncomment the following to show log messages on web pages

            /* array(
              'class'=>'CWebLogRoute',
              ), *//**/
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
        'config' => array(
            'site_url' => 'http://localhost/Cartnex/cartnex/',
            'document_root' => $_SERVER['DOCUMENT_ROOT'] . "/Cartnex/cartnex/",
			'upload_path'=>'uploads/',
            //'catalog_upload_path' => 'img/', //'uploads/catalog/',//directory path to the catalog folder
            //'misc_upload_path' => '', //directory path to the misc uploads folder
            'product_version' => '1.0', //product version
            //'template_path' => '', //directory path to the tempaltes folder
            'ssl' => '', //http,https
        ),
    ),
);
