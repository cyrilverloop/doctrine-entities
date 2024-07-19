<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\Name;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Name trait.
 */
#[
    PA\CoversTrait(Name::class),
    PA\Group('name')
]
final class NameTest extends TestCase
{
    // Methods :

    /**
     * Tests name can be accessed.
     */
    public function testCanSetAndGetAName(): void
    {
        $nameTrait = new class {
            use Name;

            public function __construct()
            {
                $this->name = '';
            }
        };

        $nameTrait->setName('test-name');

        self::assertSame(
            'test-name',
            $nameTrait->getName()
        );
    }
}
