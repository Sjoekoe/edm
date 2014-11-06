<?php 
$I = new FunctionalTester($scenario);
$I->am('guest');
$I->wantTo('see the homepage');

$I->amOnPage('/');
$I->see('Sign Up');
