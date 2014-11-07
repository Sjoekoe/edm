<?php 
$I = new FunctionalTester($scenario);
$I->am('guest');
$I->wantTo('see the login page');

$I->amOnPage('');
$I->click('Log In');

$I->seeCurrentUrlEquals('/login');
$I->see('Welcome back!');
