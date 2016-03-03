<?php

namespace Tests\Gmail\Navigators;

use Magium\AbstractTestCase;
use Magium\Gmail\Actions\Gmail\Login;
use Magium\Gmail\Navigators\Gmail\SubjectContains;
use Magium\Gmail\Navigators\Gmail\SubjectEquals;

class NavigateToEmailTest extends AbstractTestCase
{

    public function testNavigateToEmailWhereSubjectContains()
    {
        $this->getAction(Login::ACTION)->login();
        $this->getNavigator(SubjectContains::NAVIGATOR)->navigateTo('magento');
    }

    public function testNavigateToEmailWhereSubjectEquals()
    {
        $this->getAction(Login::ACTION)->login();
        $this->getNavigator(SubjectEquals::NAVIGATOR)->navigateTo('Google Alert - magento');
    }

    public function testNavigateToEmailWhereSubjectContainsFailure()
    {
        $this->setExpectedException('Facebook\WebDriver\Exception\NoSuchElementException');
        $this->getAction(Login::ACTION)->login();
        $this->getNavigator(SubjectContains::NAVIGATOR)->navigateTo('boogers');
    }

    public function testNavigateToEmailWhereSubjectEqualsFailure()
    {
        $this->setExpectedException('Facebook\WebDriver\Exception\NoSuchElementException');
        $this->getAction(Login::ACTION)->login();
        $this->getNavigator(SubjectEquals::NAVIGATOR)->navigateTo('boogers');
    }

}