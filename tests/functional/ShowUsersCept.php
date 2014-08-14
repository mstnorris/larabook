<?php 
$I = new FunctionalTester($scenario);
$I->am('a Larabook member');
$I->wantTo('list all users who have registered for Larabook');

$I->haveAnAccount(['username' => 'aaUsername1']);
$I->haveAnAccount(['username' => 'aaUsername2']);

$I->amOnPage('/users');
$I->see('aaUsername1');
$I->see('aaUsername2');


