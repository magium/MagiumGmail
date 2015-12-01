<?php

namespace Magium\Gmail\Identities;

use Magium\AbstractConfigurableElement;

class Account extends AbstractConfigurableElement
{

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