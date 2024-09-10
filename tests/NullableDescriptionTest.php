<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\NullableDescription;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the NullableDescription trait.
 */
#[
    PA\CoversTrait(NullableDescription::class),
    PA\Group('nullableDescription')
]
final class NullableDescriptionTest extends TestCase
{
    // Methods :

    /**
     * Tests a description can be accessed.
     */
    public function testCanSetAndGetADescription(): void
    {
        $descriptionTrait = new class {
            use NullableDescription;

            public function __construct()
            {
                $this->description = null;
            }
        };

        $descriptionTrait->setDescription('test-description');

        self::assertSame(
            'test-description',
            $descriptionTrait->getDescription()
        );
    }


    /**
     * Tests a null description can be accessed.
     */
    public function testCanSetAndGetANullDescription(): void
    {
        $descriptionTrait = new class {
            use NullableDescription;

            public function __construct()
            {
                $this->description = 'test-description';
            }
        };

        $descriptionTrait->setDescription(null);

        self::assertNull($descriptionTrait->getDescription());
    }
}
