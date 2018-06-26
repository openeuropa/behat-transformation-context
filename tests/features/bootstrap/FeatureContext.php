<?php

namespace OpenEuropa\Behat\Tests;

use Behat\Behat\Context\Context;

/**
 * Defines step definitions that are generally useful in this project.
 */
class FeatureContext implements Context
{

    /**
     * @var string $givenString
     */
    private $givenString;

    /**
     * @Given /^I point to ([^"]*)$/
     */
    public function translationsEqual($page)
    {
        $this->givenString = $page;
    }

    /**
     * @Given I point to the :element element
     */
    public function iPointToTheElement($element)
    {
        $this->givenString = $element;
    }

    /**
     * @Then previous step targets :value
     */
    public function stepTargets($value)
    {
        if ($this->givenString !== $value) {
            throw new \Exception("Value of '{$value}' is not equal to given {$this->givenString}.");
        }
    }
}
