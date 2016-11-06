<?php

/**
 * Class SiteAboutAction
 *
 */
class SiteAboutAction extends CAction
{
    public function run()
    {
        $this->getController()->render( 'about' );
    }
}