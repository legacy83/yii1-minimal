<?php

return array(
    'basePath' => dirname( __FILE__ ) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Yii1 Minimal',

    'components' => array(

        'db' => require( dirname( __FILE__ ) . '/database.php' ),

        'errorHandler' => array(
            'errorAction' => YII_DEBUG ? NULL : 'site/error',
        ),

    ),
);