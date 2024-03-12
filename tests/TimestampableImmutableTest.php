<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\TimestampableImmutable;
use CyrilVerloop\DoctrineEntities\TimestampableImmutable\CreatedAt;
use CyrilVerloop\DoctrineEntities\TimestampableImmutable\UpdatedAt;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the TimestampableImmutable trait.
 */
#[
    PA\CoversClass(TimestampableImmutable::class),
    PA\UsesClass(CreatedAt::class),
    PA\UsesClass(UpdatedAt::class),
    PA\Group('timestampableImmutable')
]
final class TimestampableImmutableTest extends TestCase
{
    // Methods :

    /**
     * Test that the creation date and time can be accessed.
     */
    public function testCanSetAndGetCreatedAt(): void
    {
        $timestampable = new class {
            use TimestampableImmutable;
        };
        $datetime = new \DateTimeImmutable('2021-01-01 00:00:00.0');

        $timestampable->setCreatedAt($datetime);

        self::assertSame(
            $datetime,
            $timestampable->getCreatedAt(),
            'The date and time must be the same.'
        );
    }

    /**
     * Test that the update date and time can be accessed.
     */
    public function testCanSetAndGetUpdatedAt(): void
    {
        $timestampable = new class {
            use TimestampableImmutable;
        };
        $datetime = new \DateTimeImmutable('2021-01-01 00:00:00.0');

        $timestampable->setUpdatedAt($datetime);

        self::assertEquals(
            $datetime,
            $timestampable->getUpdatedAt(),
            'The date and time must be the same.'
        );
    }
}
