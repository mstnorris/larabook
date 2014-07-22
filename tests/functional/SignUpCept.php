<?php

$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('sign up for a Larabook account');

$I->amOnPage('/');
$I->click('Sign Up');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username:', 'JohnDoe');
$I->fillField('Email:', 'johndoe@example.com');
$I->fillField('Password:', 'password');
$I->fillField('Password Confirmation:', 'password');

$I->click('Sign Up!');
$I->seeCurrentUrlEquals('');
$I->see('Welcome to Larabook');
$I->seeRecord('users', [
    'username' => 'JohnDoe',
    'email' => 'johndoe@example.com'
]);

$I->assertTrue(Auth::check());

