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
    PA\CoversClass(Priority::class),
    PA\Group('priority')
]
final class PriorityTest extends TestCase
{
    // Methods :

    /**
     * Tests priority can be accessed.
     */
    public function testCanSetAndGetPriority(): void
    {
        $priorityTrait = new class {
            use Priority;
        };
        $priority = 1;

        $priorityTrait->setPriority($priority);

        self::assertSame(
            $priority,
            $priorityTrait->getPriority(),
            'The priority must be the same.'
        );
    }
}
