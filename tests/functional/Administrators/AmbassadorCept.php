<?php

$I = new FunctionalTester($scenario);
$I->am('an administrator');
$I->wantTo('Administrator create an Ambassador account');

$I->amOnPage('/login');
$I->loginAs('Administrator');
$I->amOnPage('dashboard/ambassadors/create');
$I->fillField('email', 'newadministrator@email.com');
$I->fillField('firstname', 'AmbassadorFirstname');
$I->fillField('lastname', 'AmbassadorLastname');
$I->click('Save');
$I->canSeeInSession('success_message', 'Ambassador AmbassadorFirstname was created!');
$I->amGoingTo('dashboard/ambassadors');
$I->see('AmbassadorFirstname');
