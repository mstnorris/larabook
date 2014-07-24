<?php
namespace Codeception\Module;

use Laracasts\TestDummy\Factory as TestDummy;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module
{
    public function signIn()
    {
        $username = 'FooBar';
        $email = 'foo@example.com';
        $password = 'bar';
        $this->haveAnAccount(compact('username', 'email', 'password'));
        $I = $this->getModule('Laravel4');
        $I->amOnPage('/login');
        $I->fillField('Email:', $email);
        $I->fillField('Password:', $password);
        $I->click('Sign in');
    }

    public function postAStatus($body)
    {
        $I = $this->getModule('Laravel4');
        $I->fillField('body', $body);
        $I->click('Post Status');

    }

    public function have($model, $overrides = [])
    {
        return TestDummy::create($model, $overrides);
    }

    public function haveAnAccount($overrides = [])
    {
        return $this->have('Larabook\Users\User', $overrides);
    }
}