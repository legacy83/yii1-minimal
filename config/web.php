<?php

return array(
    'basePath' => dirname( __FILE__ ) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Yii1 Minimal',

    'preload' => array( 'log' ),

    'components' => array(

        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => FALSE,
            'rules' => array(
                '<alias:\w+>' => 'site/<alias>',
            ),
        ),

        'db' => require( dirname( __FILE__ ) . '/database.php' ),

        'errorHandler' => array(
            'errorAction' => YII_DEBUG ? NULL : 'site/error',
        ),

        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),

    ),

    'params' => require( dirname( __FILE__ ) . '/params.php' ),
);