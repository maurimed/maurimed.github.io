<?php

$I = new FunctionalTester($scenario);
$I->am('an ambassador');
$I->wantTo('Login with an Ambassador account');

$I->amOnPage('/login');
$I->loginAs('Ambassador');
$I->seeCurrentUrlEquals('/dashboard');
$I->see('Ambassadoremailcom', 'span');
$I->amOnPage('/dashboard/users/ambassadoremailcom/profile');
$I->see('Ambassador Firstname');

