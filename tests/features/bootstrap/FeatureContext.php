<?php

namespace OpenEuropa\Behat;

use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Defines step definitions that are generally useful in this project.
 */
class FeatureContext extends RawMinkContext
{

    /**
     * Opens page
     *
     * @Given I am viewing the :page page
     */
    public function iAmViewingPage($page)
    {
        $this->visitPath("/$page");
    }
}
