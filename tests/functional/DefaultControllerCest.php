<?php


class DefaultControllerCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    public function indexActionTest(FunctionalTester $I)
    {
        $I->wantTo('too see the welcome message on home page');
        $I->amOnPage('/');
        $I->see('Welcome');
    }
    // tests
    public function tryToTest(FunctionalTester $I)
    {
    }
}
