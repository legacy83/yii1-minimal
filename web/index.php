<?php

defined( 'YII_DEBUG' ) or define( 'YII_DEBUG', TRUE );
defined( 'YII_TRACE_LEVEL' ) or define( 'YII_TRACE_LEVEL', 3 );

require_once( dirname( __FILE__ ) . '/../vendor/yiisoft/yii/framework/yii.php' );
Yii::createWebApplication( dirname( __FILE__ ) . '/../config/web.php' )->run();