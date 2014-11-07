<?php
$I = new FunctionalTester($scenario);
$I->am('guest');
$I->wantTo('register to edm-school');

$I->amOnPage('/signup?plan=yearly');
$I->fillField('Username:', 'JohnDoe');
$I->fillField('Email Address:', 'john@example.com');
$I->fillField('Desired password:', 'password');
$I->fillField('Repeat Password:', 'password');
$I->fillField('Credit Card Number:', '4242424242424242');
$I->selectOption('.cc-expiration-month', 'January');
$I->selectOption('.cc-expiration-year', '2024');
$I->fillField('CVV Number:', '321');
$I->click('Join Now');

$I->seeCurrentUrlEquals('/');
$I->see('Welcome JohnDoe.');
