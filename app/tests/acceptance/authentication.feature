Feature: Authentication
  In order to administer the website
  As a Administrator
  I want to be able to login to manage my account


#  @javascript
  Scenario: Administrator updates his profile information
    Given I am on "/login"
    And I login with Admin credentials
    Then I am on "/dashboard/users/adminemailcom/profile"
    Then I follow "edit-profile"
    Then I update my profile
    Then I should see "New First Name"

#  @javascript
  Scenario: Student login to dashboard
    Given I am on "/login"
    And I login with Student credentials
    Then I should not see "Users"
