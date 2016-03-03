<?php

namespace Tests\Gmail;

use Magium\AbstractTestCase;
use Magium\Gmail\Actions\Gmail\Login;

class LoginTest extends AbstractTestCase
{
    public function testGmailLogin()
    {
        $login = $this->getAction(Login::ACTION);
        $login->login();
        $this->assertElementExists('//a[contains(@title, "Inbox")]', self::BY_XPATH);
    }
}