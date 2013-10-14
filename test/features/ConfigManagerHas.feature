Feature: ConfigManager Has Objects
    In order to manipulate objects in ConfigManager
    As a Developer
    I need to check for them in the ConfigManager

	Scenario Outline: ConfigManager has loader
        Given an alias "<alias>"
        Then ConfigManager is checked for alias

        Scenarios:
            | alias                           |
            | loader.configplusplus.yaml      |
            | loader.configplusplus.xml       |
            | loader.configplusplus.php       |

	Scenario Outline: ConfigManager has writer
        Given an alias "<alias>"
        Then ConfigManager is checked for alias

        Scenarios:
            | alias                           |
            | writer.configplusplus.yaml      |
            | writer.configplusplus.xml       |
            | writer.configplusplus.php       |

	Scenario Outline: ConfigManager has config
        Given an alias "<alias>"
        Then ConfigManager is checked for alias

        Scenarios:
            | alias                           |
            | config.configplusplus.test.yaml |
            | config.configplusplus.test.xml  |
            | config.configplusplus.test.php  |
