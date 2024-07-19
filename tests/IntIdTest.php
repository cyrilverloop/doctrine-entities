<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\IntId;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the IntId trait.
 */
#[
    PA\CoversTrait(IntId::class),
    PA\Group('intId')
]
final class IntIdTest extends TestCase
{
    // Methods :

    /**
     * Tests can access a null id.
     */
    public function testCanGetANullId(): void
    {
        $intIdTrait = new class {
            use IntId;

            public function __construct()
            {
                $this->id = null;
            }
        };

        self::assertNull($intIdTrait->getId());
    }

    /**
     * Tests can access an integer id.
     */
    public function testCanGetAIntegerId(): void
    {
        $intIdTrait = new class {
            use IntId;

            public function __construct()
            {
                $this->id = 5;
            }
        };

        self::assertSame(5, $intIdTrait->getId());
    }
}
