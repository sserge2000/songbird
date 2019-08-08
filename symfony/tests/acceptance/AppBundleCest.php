<?php


class AppBundleCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
//    public function tryToTest(AcceptanceTester $I)
//    {
//    }

//    public function InstallationTest(AcceptanceTester $I)
//    {
//        $I->wantTo('Check if Symfony is installed successfully.');
//        $I->amOnPage('/');
//        $I->see('Welcome to');
//    }

    public function RemovalTest(AcceptanceTester $I)
    {
        $I->wantTo('Check if / is not active.');
        $I->amOnPage('/');
        $I->see('404 Not Found');
    }

}
