<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\Available;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Available trait.
 */
#[
    PA\CoversTrait(Available::class),
    PA\Group('available')
]
final class AvailableTest extends TestCase
{
    // Methods :

    /**
     * Test that the available state can be accessed.
     */
    public function testCanSetAndGetAnAvailableState(): void
    {
        $availableTrait = new class {
            use Available;

            public function __construct()
            {
                $this->available = false;
            }
        };

        $availableTrait->setAvailable(true);

        self::assertTrue($availableTrait->isAvailable());
    }


    /**
     * Test that the unavailable state can be accessed.
     */
    public function testCanSetAndGetAnUnavailableState(): void
    {
        $availableTrait = new class {
            use Available;

            public function __construct()
            {
                $this->available = true;
            }
        };

        $availableTrait->setAvailable(false);

        self::assertFalse($availableTrait->isAvailable());
    }
}
