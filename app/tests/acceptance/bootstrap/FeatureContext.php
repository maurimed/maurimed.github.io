<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends MinkContext{


    /**
     * @static
     * @beforeSuite
     */
    public static function bootstrapLaravel()
    {
        $unitTesting = true;
        $testEnvironment = 'acceptance';

        $app = require_once __DIR__ . '/../../../../bootstrap/start.php';
        $app->boot();

        Artisan::call('migrate:refresh');
        Artisan::call('db:seed');
    }


    /**
     * Initializes context.
     * Every scenario gets its own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }


    /**
     * @Given /^I login with Admin credentials$/
     */
    public function iLoginWithAdminCredentials()
    {
        $this->login('admin@email.com');
    }


    /**
     * @Given /^I login with Student credentials$/
     */
    public function iLoginWithStudentCredentials()
    {
        $this->login('student@email.com');
    }


    /**
     * @Given /^I login with Ambassador credentials$/
     */
    public function iLoginWithAmbassadorCredentials()
    {
        $this->login('ochavez@epro360.com');
    }


    /**
     * @Given /^I login with University credentials$/
     */
    public function iLoginWithManagerCredentials()
    {
        $this->login('manager@email.com');
    }


    /**
     * @Given /^I login with Parent credentials$/
     */
    public function iLoginWithParentCredentials()
    {
        $this->login('parent@email.com');
    }


    /**
     * @Given /^I login with Director credentials$/
     */
    public function iLoginWithDirectorCredentials()
    {
        $this->login('director@email.com');
    }

    public function login($email, $password = "123456")
    {
        $this->fillField('email', $email);
        $this->fillField('password', $password);
        $this->pressButton('Login');
    }


    /**
     * @Then /^I update my profile$/
     */
    public function iUpdateMyProfile()
    {
        $this->fillField('firstname','New First Name');
        $this->fillField('lastname','New Last Name');
        $this->fillField('username','NewUserName');
//        $this->fillField('personal_email', 'personal@email.com');
        $this->fillField('password', 'secret');
        $this->fillField('passwordConfirm', 'secret');
//        $this->fillField('phone', '052638570');
//        $this->fillField('personal_phone', '099856234');
//        $this->fillField('about_me', 'About me dummy text');
        $this->pressButton('Update');
    }


    /**
     * @Then /^I logout$/
     */
    public function iLogout()
    {
        $this->visit('/logout');
    }

    /**
     * @Given /^I login with my new password$/
     */
    public function iLoginWithMyNewPassword()
    {
        $this->login('admin@email.com','secret');

    }


    /**
     * @Then /^I create a public post$/
     */
    public function iCreateAPublicPost()
    {
        $this->fillField('title','My new post title');

        $this->fillField('body', 'My dummy text of my new post');

//        $this->iFillInWysiwygWith('My dummy text of my new post');

        $this->checkOption('published');

        $this->pressButton('Save');
    }

    /**
     * @Then /^I create a not public post$/
     */
    public function iCreateANotPublicPost()
    {
        $this->fillField('title','My new private post title');

        $this->fillField('body', 'My dummy text of my new private post');


//        $this->iFillInWysiwygWith('My dummy text of my new post');

        $this->pressButton('Save');
    }


    public function iFillInWysiwygWith($content)
    {
        $js = <<<HEREDOC
        jQuery("textarea[name='body']").css('visibility', 'visible');
        jQuery("textarea[name='body']").show();
HEREDOC;
        $this->getSession()->executeScript($js);
        $this->fillField('body', $content);
    }


    /**
     * @Then /^I create a new Administrator$/
     */
    public function iCreateANewAdministrator()
    {
        $this->fillField('firstname','New Admin');
        $this->fillField('lastname','New lastname');
        $this->fillField('email','newadmin@email.com');


        $this->pressButton('Save');
    }


    /**
     * @Then /^I create a new Ambassador$/
     */
    public function iCreateANewAmbassador()
    {
        $this->fillField('firstname','New Ambassador');
        $this->fillField('lastname','New lastname');
        $this->fillField('email','newambassador@email.com');


        $this->pressButton('Save');
    }


    /**
     * @Then /^I create a new Student$/
     */
    public function iCreateANewStudent()
    {
        $this->fillField('firstname','New Student');
        $this->fillField('lastname','New lastname');
        $this->fillField('email','newstudent@email.com');

        $this->pressButton('Save');    }


}
