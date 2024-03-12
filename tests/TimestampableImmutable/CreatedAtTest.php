<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests\TimestampableImmutable;

use CyrilVerloop\DoctrineEntities\TimestampableImmutable\CreatedAt;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the CreatedAt trait.
 */
#[
    PA\CoversClass(CreatedAt::class),
    PA\Group('createdAtImmutable')
]
final class CreatedAtTest extends TestCase
{
    // Methods :

    /**
     * Test that the creation date and time can be accessed.
     */
    public function testCanSetAndGetCreatedAt(): void
    {
        $createdAt = new class {
            use CreatedAt;
        };
        $datetime = new \DateTimeImmutable('2021-01-01 00:00:00.0');

        $createdAt->setCreatedAt($datetime);

        self::assertSame(
            $datetime,
            $createdAt->getCreatedAt(),
            'The date and time must be the same.'
        );
    }
}
