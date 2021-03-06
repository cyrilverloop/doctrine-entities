<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\Priority;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Priority trait.
 * @package \CyrilVerloop\DoctrineEntities\Tests
 *
 * @coversDefaultClass \CyrilVerloop\DoctrineEntities\Priority
 */
class PriorityTest extends TestCase
{
    // Methods :

    /**
     * Tests priority can be accessed.
     * @return void
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
