@api
Feature: Run a behat test
  In order to run behat tests
  As a developer
  I need strings to be parsed using transformation definitions

  Scenario: Strings in step are parsed using transformation definitions
    Given I am on the homepage
    And I should see an "html-tag" element
