<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\Sauce\Context\SauceContext;

/**
 * Features context.
 */
class FeatureContext extends SauceContext {
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param   array   $parameters     context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters) {
        parent::__construct($parameters);
    }

/**
     * @Given /^I fill in searchBox with "([^"]*)"$/
     */
    public function iFillInSearchboxWith($input)
    {
        $this->fillField("searchInput",$input); 
    }
    
    /**
     * @When /^I press search button$/
     */
    public function iPressSearchButton()
    {
        $this->getMink()->getSession()->getDriver()->click("//*[@id='searchButton']");
         $this->getMink()->getSession()->wait("3000");
    }
}
