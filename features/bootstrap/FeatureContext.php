<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;


/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements
    SnippetAcceptingContext
{


    /**
     * @When I press more
     */
    public function iPressMore()
    {
//        throw new PendingException();
        $this->getSession() // the browser
        ->getPage()         // the DocumentElement
        ->findButton("more")// the NodeElement
        ->press();          // what you want to do with it
    }


}
