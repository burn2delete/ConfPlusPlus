Feature: Config Symfony App Set
  In order to Set an application configuration value
  As a developer
  I need to Implement a Config Application and execute command set

  Scenario Outline:
    Given a Config Application
    And a loaded Config
    And a Setting ID "<settingId>" with a new value "<newValue>"
    Then the Setting is changed in the Application Config

    Examples:
    | settingId    |  newValue  |
    | config:bool  |  false     |