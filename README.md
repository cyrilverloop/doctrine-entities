# doctrine-entities

Some default doctrine entity/fields requiring PHP >=8.2 and Doctrine ORM >=3.2.

For compatibility with Doctrine ORM <3.2 , see version <8.0 of this software.

This includes :

- `AbstractIntId` : a mapped superclass with an `$id` as an integer identifier/primary key;
- `IntId` : a trait that adds an `$id` as an integer identifier/primary key;
- `IntIdInterface` : an interface for integer id;
- `Active` : a trait that adds an `$active` boolean field;
- `Available` : a trait that adds an `$available` boolean field;
- `Priority` : a trait that adds a `$priority` integer field;
- `Slug` : a trait that adds a `$slug` text field;
- `Name` : a trait that adds a `$name` text field;
- `Description` : a trait that adds a `$description` text field;
- `NullableDescription` : a trait that adds a nullable `$description` text field;
- `ConnectedAt` : two traits that add a `$connectedAt` field (choose between \DateTime() or \DateTimeImmutable());
- `CreatedAt` : two traits that add a `$createdAt` field (choose between \DateTime() or \DateTimeImmutable());
- `UpdatedAt` : two traits that add a `$updatedAt` field (choose between \DateTime() or \DateTimeImmutable()).

[![License](https://img.shields.io/github/license/cyrilverloop/doctrine-entities)](https://github.com/cyrilverloop/doctrine-entities/blob/trunk/LICENSE)
[![Type coverage](https://shepherd.dev/github/cyrilverloop/doctrine-entities/coverage.svg)](https://shepherd.dev/github/cyrilverloop/doctrine-entities)
[![Minimum PHP version](https://img.shields.io/badge/php-%3E%3D8.2-%23777BB4?logo=php&style=flat)](https://www.php.net/)


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
user@host doctrine-entities$ phive install --trust-gpg-keys 4AA394086372C20A,12CE0F1D262429A5,31C7E470E2138192,8AC0BAA79732DD42,C5095986493B4AA0
```


## Mappings

There are annotations, attributes and XML mappings. For XML mappings, read below.

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

You need to copy the require configuration in your XML file.

For example :
```xml
<id name="id" type="integer">
    <generator strategy="AUTO" />
    <options>
        <option name="unsigned">true</option>
    </options>
</id>
<field name="connectedAt" column="connected_at" type="datetime" nullable="true" />
<field name="connectedAt" column="connected_at" type="datetime_immutable" nullable="true" />
<field name="createdAt" column="created_at" type="datetime" />
<field name="createdAt" column="created_at" type="datetime_immutable" />
<field name="updatedAt" column="updated_at" type="datetime" nullable="true" />
<field name="updatedAt" column="updated_at" type="datetime_immutable" nullable="true" />
<field name="active" column="active" type="boolean" />
<field name="available" column="available" type="boolean" />
<field name="priority" column="priority" type="smallint">
    <options>
        <option name="default">0</option>
    </options>
</field>
<field name="slug" column="slug" type="text" nullable="true" />
<field name="name" column="name" type="text" />
<field name="description" column="description" type="text" />
<field name="description" column="description" type="text" nullable="true" />
```

You can also look at the `resources/mappings/Example.orm.xml` file.

## Usage

### AbstractIntId / IntId / IntIdInterface

**In version <8.0, `IntId` was an abstract class.**
Due to uncertain support of
[multiple inheritance mapped superclasses in different namespaces](https://github.com/doctrine/orm/issues/11488),
this is now a trait.

If your entities need an integer as an identifier/primary key :
- they can extend the mapped super class `CyrilVerloop\DoctrineEntities\AbstractIntId`

```php
<?php

declare(strict_types=1);

namespace MyNamespace;

use CyrilVerloop\DoctrineEntities\AbstractIntId;

class Product extends AbstractIntId
{
    // Your code here.
}
```

- use the `CyrilVerloop\DoctrineEntities\IntId` trait

```php
<?php

declare(strict_types=1);

namespace MyNamespace;

use CyrilVerloop\DoctrineEntities\IntId;

class Product
{
    use IntId;

    public function __construct()
    {
        // Do not forget to initiate the id :
        $this->id = null;
    }
}
```

- implement the `CyrilVerloop\DoctrineEntities\IntIdInterface` interface

```php
<?php

declare(strict_types=1);

namespace MyNamespace;

use CyrilVerloop\DoctrineEntities\IntIdInterface;

class Product implements IntIdInterface
{
    // Your code here.
}
```

### Active / Available / Priority / Slug / Timestampable ...

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


## Continuous integration

### Tests

To run the tests :
```shellsession
user@host doctrine-entities$ ./tools/phpunit -c ./ci/phpunit.xml
```
The generated outputs will be in `./ci/phpunit/`.
Look at `./ci/phpunit/html/index.html` for code coverage
and `./ci/phpunit/testdox.html` for a verbose list of passing / failing tests.

To run mutation testing, you must run PHPUnit first, then :
```shellsession
user@host doctrine-entities$ ./tools/infection -c./ci/infection.json
```
The generated outputs will be in `./ci/infection/`.

### Static analysis

To do a static analysis :
```shellsession
user@host doctrine-entities$ ./tools/psalm -c ./ci/psalm.xml [--report=./psalm/psalm.txt --output-format=text]
```
Use "--report=./psalm/psalm.txt --output-format=text"
if you want the output in a file instead of on screen.

### PHPDoc

To generate the PHPDoc :
```shellsession
user@host doctrine-entities$ ./tools/phpdocumentor --config ./ci/phpdoc.xml
```
The generated HTML documentation will be in `./ci/phpdoc/`.


### Standard

All PHP files in this project follows [PSR-12](https://www.php-fig.org/psr/psr-12/).
To indent the code :
```shellsession
user@host doctrine-entities$ ./tools/phpcbf --standard=PSR12 --extensions=php -p ./src/ ./tests/
```
