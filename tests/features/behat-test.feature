Feature: Run a behat test
  In order to run behat tests
  As a developer
  I need strings to be parsed using transformation definitions

  Scenario: Strings in step are parsed using transformation definitions
    Given I point to the home page
    Then previous step targets "index.php"
    When I point to the "header" element
    Then previous step targets "div#header"
