<?php

$I = new FunctionalTester($scenario);

$I->am('a Larabook member.');
$I->wantTo('follow other Larabook members.');

$I->haveAnAccount(['username' => 'anotherUser']);
$I->signIn();

$I->click('Browse Users');
$I->click('anotherUser');

$I->seeCurrentUrlEquals('/@anotherUser');
$I->click('Follow anotherUser');
$I->seeCurrentUrlEquals('/@anotherUser');
$I->see('Unfollow anotherUser');

$I->click('Unfollow anotherUser');
$I->seeCurrentUrlEquals('/@anotherUser');
$I->click('Follow anotherUser');