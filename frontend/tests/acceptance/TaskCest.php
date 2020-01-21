<?php namespace frontend\tests\acceptance;

use frontend\tests\AcceptanceTester;
use yii\helpers\Url;

class TaskCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }

    public function checkTask(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/task/index'));
        $I->see('Task tracker Controller');
    }
}
