<?php

namespace Magium\Gmail\Navigators\Gmail;

use Magium\WebDriver\ExpectedCondition;
use Magium\WebDriver\WebDriver;

abstract class AbstractSubjectNavigation
{
    protected $webDriver;

    public function __construct(
        WebDriver           $webDriver
    )
    {
        $this->webDriver    = $webDriver;
    }

    protected abstract function navigate($subject);

    public function navigateTo($subject)
    {
        $this->navigate($subject);
        $waitXpath = sprintf('//h2[contains(., "%s")]', $subject);
        $this->webDriver->wait()->until(ExpectedCondition::elementExists($waitXpath, WebDriver::BY_XPATH));
    }

}