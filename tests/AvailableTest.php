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
    PA\CoversClass(Available::class),
    PA\Group('available')
]
final class AvailableTest extends TestCase
{
    // Methods :

    /**
     * Returns availabilities.
     *
     * @return mixed[] availabilities.
     */
    public static function getAvailable(): array
    {
        return [
            'not available' => [false],
            'available' => [true]
        ];
    }

    /**
     * Test that the availability can be accessed.
     *
     * @param bool $available the availability.
     */
    #[
        PA\DataProvider('getAvailable'),
        PA\TestDox('Can set and get availability when it is $_dataName.')
    ]
    public function testCanSetAndGetAvailability(bool $available): void
    {
        $availableTrait = new class {
            use Available;
        };

        $availableTrait->setAvailable($available);

        self::assertSame(
            $available,
            $availableTrait->isAvailable(),
            'The availability must be the same.'
        );
    }
}
