<?php

namespace Tests\Gmail;

use Magium\AbstractTestCase;

class LoginTest extends AbstractTestCase
{
    public function testGmailLogin()
    {
        $login = $this->get('Magium\Gmail\Actions\Login');
        $login->login();
        $this->assertElementExists('//a[contains(@title, "Inbox")]', self::BY_XPATH);
    }
}