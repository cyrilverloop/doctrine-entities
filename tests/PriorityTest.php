<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\Priority;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Priority trait.
 */
#[
    PA\CoversTrait(Priority::class),
    PA\Group('priority')
]
final class PriorityTest extends TestCase
{
    // Methods :

    /**
     * Tests a positive priority can be accessed.
     */
    public function testCanSetAndGetAPositivePriority(): void
    {
        $priorityTrait = new class {
            use Priority;

            public function __construct()
            {
                $this->priority = 0;
            }
        };

        $priorityTrait->setPriority(1);

        self::assertSame(1, $priorityTrait->getPriority());
    }

    /**
     * Tests a negative priority can be accessed.
     */
    public function testCanSetAndGetANegativePriority(): void
    {
        $priorityTrait = new class {
            use Priority;

            public function __construct()
            {
                $this->priority = 0;
            }
        };

        $priorityTrait->setPriority(-2);

        self::assertSame(-2, $priorityTrait->getPriority());
    }
}
