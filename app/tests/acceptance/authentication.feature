Feature: Authentication
  In order to administer the website
  As a Administrator
  I want to be able to login to manage my account


#@javascript
  Scenario: Administrator updates his profile information
    Given I am on "/login"
    And I login with Admin credentials
    Then I am on "/dashboard/users/adminemailcom/profile"
    Then I follow "edit-profile"
    Then I update my profile
    Then I should see "New First Name"

#@javascript
  Scenario: Student updates his profile information
    Given I am on "/login"
    And I login with Student credentials
    Then I am on "/dashboard/users/studentemailcom/profile"
    Then I follow "edit-profile"
    Then I update my profile
    Then I should see "New First Name"

#@javascript
  Scenario: Ambassador updates his profile information
    Given I am on "/login"
    And I login with Ambassador credentials
    Then I am on "/dashboard/users/ochavezepro360com/profile"
    Then I follow "edit-profile"
    Then I update my profile
    Then I should see "New First Name"

#@javascript
  Scenario: Director updates his profile information
    Given I am on "/login"
    And I login with Director credentials
    Then I am on "/dashboard/users/directoremailcom/profile"
    Then I follow "edit-profile"
    Then I update my profile
    Then I should see "New First Name"

  Scenario: Parent updates his profile information
    Given I am on "/login"
    And I login with Parent credentials
    Then I am on "/dashboard/users/parentemailcom/profile"
    Then I follow "edit-profile"
    Then I update my profile
    Then I should see "New First Name"

  Scenario: Manager updates his profile information
    Given I am on "/login"
    And I login with University credentials
    Then I am on "/dashboard/users/manageremailcom/profile"
    Then I follow "edit-profile"
    Then I update my profile
    Then I should see "New First Name"