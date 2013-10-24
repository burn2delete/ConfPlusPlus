ConfPlusPlus
============

ConfPlusPlus - PHP Config Library

Installing via Composer
-----------------------
Add ConfPlusPlus to your project:

```bash
$>  composer.phar require projectmeta/confplusplus *
```

or directly to composer.json:

```json
{
    "require": {
        "projectmeta/confplusplus": "*"
    }
}
```

Then update your dependencies:

```bash
$>  composer.phar update
```

Example Usage
-----------------------
Create a Config Class and extend AbstractConfig:
```php
<?php

use projectmeta\ConfPlusPlus\Config\AbstractConfig;

class ExampleYamlConfig extends AbstractConfig
{
    
    
}

```

Create a `getResources()` function inside your Config Class, this should return something appropriate for you selected loader (default `YamlLoader`) 
```php
public function getResources()
{
        
    $configDirectories = array(__DIR__);
    $this->locator = new FileLocator($configDirectories);
    return $this->locator->locate('test.yml', null, true);
        
}
```

Our example resource contains the following
```yaml
test:
 bool: true
```

Create a `getConfigTreeBuilder()` function inside your Config Class (See Symfony Config Component Documentation)
```php
public function getConfigTreeBuilder()
{
        
    $treeBuilder = new TreeBuilder();
    $rootNode = $treeBuilder->root('test');
    return $treeBuilder;
        
}
```

This will parse and validate all of the configs returned by `getResources()` and store them in a local array `$this->config[]`
You may now create getters/setters for any of the configs in your class (See Symfony PropertyAccessor Component)
    
```php
public function getBool()
{
        
    return $this->config['bool'];
        
}
    
public function setBool($newValue)
{
        
    $this->config['bool'] = $newValue;
        
}
```