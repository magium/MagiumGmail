# magium/gmail

Sorry for the short intro, but I'm behind on stuff :-)

This module has some basic functionality that allows you to log in to Gmail and test to see if an email exists, such as a transactional email.

Using it is pretty simple.

Step 1: Require it

```
composer require magium/mail
```

Step 2: Configure it

In the base of your project create a directory called `/configuration/Magium/Gmail/Identities/Gmail` and create a file called `Account.php`.  Add your username and password.

```
<?php

$this->emailAddress = 'mygmailusername@gmail.com';
$this->password     = 'mypassword';

```

Step 3: Integrate it

Right now you can navigate to an email by subject-equals or subject-contains.

First subject-contains
```
<?php

use Magium\AbstractTestCase;
use Magium\Gmail\Actions\Gmail\Login;
use Magium\Gmail\Navigators\Gmail\SubjectContains;

class NavigateToEmailTest extends AbstractTestCase
{

    public function testNavigateToEmailWhereSubjectEquals()
    {
        $this->getAction(Login::ACTION)->login();
        $this->getNavigator(SubjectContains::NAVIGATOR)->navigateTo('magento');
    }

}
```

Second subject-equals
```
<?php

use Magium\AbstractTestCase;
use Magium\Gmail\Actions\Gmail\Login;
use Magium\Gmail\Navigators\Gmail\SubjectEquals;

class NavigateToEmailTest extends AbstractTestCase
{

    public function testNavigateToEmailWhereSubjectEquals()
    {
        $this->getAction(Login::ACTION)->login();
        $this->getNavigator(SubjectEquals::NAVIGATOR)->navigateTo('Google Alerts - magento');
    }

}
```