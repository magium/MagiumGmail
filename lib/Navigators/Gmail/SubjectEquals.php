<?php

namespace Magium\Gmail\Navigators\Gmail;

use Magium\WebDriver\ExpectedCondition;
use Magium\WebDriver\WebDriver;

class SubjectEquals extends AbstractSubjectNavigation
{

    const NAVIGATOR = 'Gmail\SubjectEquals';

    protected function navigate($subject)
    {
        $xpath = sprintf('//td[contains(., "%s")]/descendant::div[@role="link"]/descendant::span[concat(" ",normalize-space(.)," ") = " %s "]', $subject, $subject);
        $element = $this->webDriver->byXpath($xpath);
        $element->click();

    }
}
