Feature: Config Load
  In order to load a configuration value
  As a developer
  I need to load the Config

  Scenario:
    Given a Config
    And it is loaded
    Then the config properties can be accessed