<?php

namespace Tests\Gmail\Navigators;

use Magium\AbstractTestCase;
use Magium\Gmail\Actions\Gmail\Login;
use Magium\Gmail\Navigators\Gmail\SelectEmail;

class NavigateToEmailTest extends AbstractTestCase
{

    public function testNavigateToEmailWhereSubjectEquals()
    {
        $this->getAction(Login::ACTION)->login();
        $this->getNavigator(SelectEmail::NAVIGATOR)->navigateToEmailWhereSubjectContains('magento');
    }

}