<?php

namespace Magium\Gmail\Identities\Gmail;

use Magium\AbstractConfigurableElement;

class Account extends AbstractConfigurableElement
{
    const IDENTITY = 'Gmail\Account';

    protected $emailAddress;
    protected $password;

    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    public function getPassword()
    {
        return $this->password;
    }


}