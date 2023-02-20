<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests\Timestampable;

use CyrilVerloop\DoctrineEntities\Timestampable\UpdatedAt;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the UpdatedAt trait.
 */
#[
    PA\CoversClass(UpdatedAt::class),
    PA\Group('updatedAt')
]
final class UpdatedAtTest extends TestCase
{
    // Methods :

    /**
     * Test that the update date and time can be accessed.
     */
    public function testCanSetAndGetUpdatedAt(): void
    {
        $updatedAt = $this->getMockForTrait(UpdatedAt::class);
        $datetime = new \DateTime('2021-01-01 00:00:00.0');

        $updatedAt->setUpdatedAt($datetime);

        self::assertEquals(
            $datetime,
            $updatedAt->getUpdatedAt(),
            'The date and time must be the same.'
        );
    }
}
