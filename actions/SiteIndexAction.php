<?php

/**
 * Class SiteIndexAction
 *
 */
class SiteIndexAction extends CAction
{
    public function run()
    {
        $this->getController()->render( 'index' );
    }
}