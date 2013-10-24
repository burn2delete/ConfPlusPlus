Feature: Config Get
  In order to use a configuration value
  As a developer
  I need to retrieve it from Config instance

  Scenario Outline:
    Given a loaded Config
    And a Setting ID "<settingId>"
    Then the Setting is retrieved from the Config

    Examples:
    | settingId    |
    | bool         |