<?php

/**
 * Class SiteController
 *
 */
class SiteController extends CController
{
    public function actionIndex()
    {
        $this->render( 'index' );
    }

    public function actionAbout()
    {
        $this->render( 'about' );
    }
}