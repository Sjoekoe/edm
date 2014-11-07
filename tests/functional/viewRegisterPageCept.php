<?php
$I = new FunctionalTester($scenario);
$I->am('guest');
$I->wantTo('see the plans page');

$I->amOnPage('');
$I->click('Sign Up');
$I->seeCurrentUrlEquals('/join');
$I->see('Choose your subscription plan');

$I->click('.btn.btn-signup.yearly');
$I->seeCurrentUrlEquals('/signup');
