<?php

namespace Tests\Gmail\Navigators;

use Magium\AbstractTestCase;

class NavigateToEmailTest extends AbstractTestCase
{

    public function testNavigateToEmailWhereSubjectEquals()
    {
        $this->get('Magium\Gmail\Actions\Login')->login();
        $xpath = '//*[@id=":q1"]'
        $this->get('Magium\Gmail\Navigators\SelectEmail')->navigateToEmailWhereSubjectEquals();
    }

}