<?php

namespace Magium\Gmail\Navigators\Gmail;

use Magium\WebDriver\WebDriver;

class SubjectContains extends AbstractSubjectNavigation
{

    const NAVIGATOR = 'Gmail\SubjectContains';

    protected function navigate($subject)
    {
        $xpath = sprintf('//td[contains(., "%s")]/descendant::div[@role="link"]/descendant::span[contains(concat(" ",normalize-space(.)," "), " %s ")]', $subject, $subject);
        $element = $this->webDriver->byXpath($xpath);
        $element->click();

    }
}
