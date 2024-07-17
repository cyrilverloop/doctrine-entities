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
     * Returns active states.
     *
     * @return mixed[] active states.
     */
    public static function getActive(): array
    {
        return [
            'not active' => [false],
            'active' => [true]
        ];
    }

    /**
     * Test that the active state can be accessed.
     *
     * @param bool $active the active state.
     */
    #[
        PA\DataProvider('getActive'),
        PA\TestDox('Can set and get active state when it is $_dataName.')
    ]
    public function testCanSetAndGetActiveState(bool $active): void
    {
        $activeTrait = new class {
            use Active;
        };

            $activeTrait->setActive($active);

            self::assertSame(
                $active,
                $activeTrait->isActive(),
                'The active state must be the same.'
            );
    }
}
