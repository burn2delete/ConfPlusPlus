Feature: Config Symfony App Get
  In order to Get an application configuration value
  As a developer
  I need to Implement a Config Application and execute command get

  Scenario Outline:
    Given a Config Application
    And a loaded Config
    And a Setting ID "<settingId>"
    Then the Setting is retrieved from the Application Config

    Examples:
    | settingId    |
    | config:bool  |