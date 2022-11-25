# doctrine-entities

Some default doctrine entity/fields requiring PHP 8.1+ and Doctrine 2.13+.

This includes :

- `IntId` : an abstract class with an `$id` as an integer identifier/primary key;
- `Available` : a trait that adds an `$available` boolean field;
- `Priority` : a trait that adds a `$priority` integer field;
- `Slug` : a trait that adds a `$slug` string field;
- `ConnectedAt` : two traits that add a `$connectedAt` field (choose between \DateTime() or \DateTimeImmutable());
- `CreatedAt` : two traits that add a `$createdAt` field (choose between \DateTime() or \DateTimeImmutable());
- `UpdatedAt` : two traits that add a `$updatedAt` field (choose between \DateTime() or \DateTimeImmutable()).

[![License](https://img.shields.io/github/license/cyrilverloop/doctrine-entities)](https://github.com/cyrilverloop/doctrine-entities/blob/trunk/LICENSE)
[![Type coverage](https://shepherd.dev/github/cyrilverloop/doctrine-entities/coverage.svg)](https://shepherd.dev/github/cyrilverloop/doctrine-entities)
[![Minimum PHP version](https://img.shields.io/badge/php-%3E%3D8.1-%23777BB4?logo=php&style=flat)](https://www.php.net/)


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
user@host doctrine-entities$ phive install --trust-gpg-keys 4AA394086372C20A,12CE0F1D262429A5,31C7E470E2138192,67F861C3D889C656,C5095986493B4AA0
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

You need to copy the `<field />` fields you require in your XML files.

For example :
```xml
<field name="connectedAt" column="connected_at" type="datetime" nullable="true" />
<field name="createdAt" column="created_at" type="datetime" />
<field name="updatedAt" column="updated_at" type="datetime" nullable="true" />
<field name="available" column="available" type="boolean" />
<field name="priority" column="priority" type="smallint">
    <options>
        <option name="default">0</option>
    </options>
</field>
<field name="slug" column="slug" type="string" nullable="true" />
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

### Available / Priority / Slug / Timestampable ...

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
