<?php

namespace Magium\Gmail\Navigators;

use Magium\WebDriver\ExpectedCondition;
use Magium\WebDriver\WebDriver;

class SelectEmail
{

    protected $webDriver;

    public function __construct(
        WebDriver           $webDriver
    )
    {
        $this->webDriver    = $webDriver;
    }

    public function navigateToEmailWhereSubjectEquals($subject)
    {
        // TODO, this will also select the sender too.  Fix to force the subject
        $xpath = sprintf('//td[contains(., "%s")]/descendant::*[.="%s"]', $subject, $subject);
        $element = $this->webDriver->byXpath($xpath);
        $element->click();

        $waitXpath = sprintf('//h2[.="%s"]', $subject);
        $this->webDriver->wait()->until(ExpectedCondition::elementExists($waitXpath));
    }


    public function navigateToEmailWhereSubjectContains($subject)
    {
        $xpath = sprintf('//td[contains(., "%s")]/descendant::*[contains(., "%s")]', $subject, $subject);
        $element = $this->webDriver->byXpath($xpath);
        $element->click();

        $waitXpath = sprintf('//h2[contains(., "%s")]', $subject);
        $this->webDriver->wait()->until(ExpectedCondition::elementExists($waitXpath));
    }
}
