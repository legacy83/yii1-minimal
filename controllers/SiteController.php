<?php

/**
 * Class SiteController
 *
 */
class SiteController extends CController
{
    public function actions()
    {
        return array(
            'index' => 'application.actions.SiteIndexAction',
            'about' => 'application.actions.SiteAboutAction',
        );
    }
}