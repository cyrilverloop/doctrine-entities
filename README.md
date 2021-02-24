# doctrine-entities

Some default doctrine entity/fields requiring PHP 7.4+ and Doctrine 2.8.

This includes :

- `IntId` : an abstract class with an `$id` as an integer identifier/primary key;
- `Available` : a trait that adds an `$available` boolean field;
- `Priority` : a trait that adds a `$priority` integer field;
- `ConnectedAt` : a trait that adds a `$connectedAt` \DateTime() field;
- `CreatedAt` : a trait that adds a `$createdAt` \DateTime() field;
- `UpdatedAt` : a trait that adds an `$updatedAt` \DateTime() field;

[![License](https://img.shields.io/github/license/cyrilverloop/doctrine-entities)](https://github.com/cyrilverloop/doctrine-entities/blob/trunk/LICENSE)
[![Type coverage](https://shepherd.dev/github/cyrilverloop/doctrine-entities/coverage.svg)](https://shepherd.dev/github/cyrilverloop/doctrine-entities)
[![Minimum PHP version](https://img.shields.io/badge/php-%3E%3D7.4-%23777BB4?logo=php&style=flat)](https://www.php.net/)


## Installation

### As a Composer depedency

In your project directory run

```shellsession
user@host project$ composer require "cyril-verloop/doctrine-entities"
```

### For development purposes

```shellsession
user@host ~$ cd [PATH_WHERE_TO_PUT_THE_PROJECT] # E.g. ~/projects/
user@host projects$ git clone https://github.com/cyrilverloop/doctrine-entities.git
user@host projects$ cd doctrine-entities
user@host doctrine-entities$ composer install -o
user@host doctrine-entities$ phive install
```


## Mappings

There are both annotations and XML mappings. For XML mappings, read below.

### Entity

The XML file is located in the `config/doctrine/` directory.
You just have to copy or reference it depending on your needs.
If you use Symfony, the XML file just needs to be referenced in the `resources/config/packages/doctrine.yaml` file :

```yaml
doctrine:
    orm:
        entity_managers:
            app: # your project name.
                mappings:
                    CyrilVerloop\DoctrineEntities:
                        type: xml
                        dir: '%kernel.project_dir%/vendor/cyril-verloop/doctrine-entities/config/doctrine'
                        prefix: CyrilVerloop\DoctrineEntities
```

### Traits

You need to copy the `<field />` fields you require in your XML files.

For example :
```xml
<field name="connectedAt" column="connected_at" type="datetime" nullable="true" />
<field name="createdAt" column="created_at" type="datetime" />
<field name="updatedAt" column="updated_at" type="datetime" nullable="true" />
<field name="available" column="available" type="boolean" />
<field name="priority" column="priority" type="integer" />
```

You can also look at the `resources/mappings/Example.orm.xml` file.

## Usage

### IntId

If your entities need an integer as an identifier/primary key,
they can extend the mapped super class `CyrilVerloop\DoctrineEntities\IntId`.

```php
<?php

declare(strict_types=1);

namespace MyNamespace;

use CyrilVerloop\DoctrineEntities\IntId;

class Product extends IntId
{
    // Your code here.
}
```

### Available / Priority / Timestampable ...

If your entities need some other fields, they can use a trait.

```php
<?php

declare(strict_types=1);

namespace MyNamespace;

use CyrilVerloop\DoctrineEntities\Available;

class Product
{
    use Available;

    // Your code here.
}
```
