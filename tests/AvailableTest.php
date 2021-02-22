<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\Available;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Available trait.
 * @package \CyrilVerloop\DoctrineEntities\Tests
 *
 * @coversDefaultClass \CyrilVerloop\DoctrineEntities\Available
 */
class AvailableTest extends TestCase
{
    // Methods :

    /**
     * Returns availabilities.
     * @return mixed[] availabilities.
     */
    public function getAvailable(): array
    {
        return [
            'when it is not available.' => [false],
            'when it is available.' => [true]
        ];
    }

    /**
     * Test that the availability can be accessed.
     * @param bool $available the availability.
     * @return void
     *
     * @covers ::setAvailable
     * @covers ::isAvailable
     * @dataProvider getAvailable
     */
    public function testCanSetAndGetAvailability(bool $available): void
    {
        $availableTrait = $this->getMockForTrait(Available::class);

        $availableTrait->setAvailable($available);

        self::assertSame(
            $available,
            $availableTrait->isAvailable(),
            'The availability must be the same.'
        );
    }
}
