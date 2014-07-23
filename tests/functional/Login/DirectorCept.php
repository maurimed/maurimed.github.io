<?php

$I = new FunctionalTester($scenario);
$I->am('an director');
$I->wantTo('Login with an Director account');

$I->amOnPage('/login');
$I->loginAs('Director');
$I->seeCurrentUrlEquals('/dashboard');
$I->see('Directoremailcom', 'span');
$I->amOnPage('/dashboard/users/directoremailcom/profile');
$I->see('Director Firstname');

