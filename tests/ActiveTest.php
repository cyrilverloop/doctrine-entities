<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\Active;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Active trait.
 */
#[
    PA\CoversTrait(Active::class),
    PA\Group('active')
]
final class ActiveTest extends TestCase
{
    // Methods :

    /**
     * Test that the active state can be accessed.
     */
    public function testCanSetAndGetAnActiveState(): void
    {
        $activeTrait = new class {
            use Active;

            public function __construct()
            {
                $this->active = false;
            }
        };

        $activeTrait->setActive(true);

        self::assertTrue($activeTrait->isActive());
    }


    /**
     * Test that the inactive state can be accessed.
     */
    public function testCanSetAndGetAnInactiveState(): void
    {
        $activeTrait = new class {
            use Active;

            public function __construct()
            {
                $this->active = true;
            }
        };

        $activeTrait->setActive(false);

        self::assertFalse($activeTrait->isActive());
    }
}
