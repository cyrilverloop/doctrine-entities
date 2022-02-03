<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\Priority;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Priority trait.
 *
 * @coversDefaultClass \CyrilVerloop\DoctrineEntities\Priority
 */
final class PriorityTest extends TestCase
{
    // Methods :

    /**
     * Tests priority can be accessed.
     *
     * @covers ::setPriority
     * @covers ::getPriority
     */
    public function testCanSetAndGetPriority(): void
    {
        $priorityTrait = $this->getMockForTrait(Priority::class);
        $priority = 1;

        $priorityTrait->setPriority($priority);

        self::assertSame(
            $priority,
            $priorityTrait->getPriority(),
            'The priority must be the same.'
        );
    }
}
