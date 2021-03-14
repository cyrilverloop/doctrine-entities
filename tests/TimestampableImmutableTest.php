<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\TimestampableImmutable;
use PHPUnit\Framework\TestCase;

/**
 * Tests the TimestampableImmutable trait.
 * @package \CyrilVerloop\DoctrineEntities\Tests
 *
 * @coversDefaultClass \CyrilVerloop\DoctrineEntities\TimestampableImmutable
 */
class TimestampableImmutableTest extends TestCase
{
    // Methods :

    /**
     * Test that the creation date and time can be accessed.
     * @return void
     *
     * @covers ::setCreatedAt
     * @covers ::getCreatedAt
     */
    public function testCanSetAndGetCreatedAt(): void
    {
        $timestampable = $this->getMockForTrait(TimestampableImmutable::class);
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
     * @return void
     *
     * @covers ::setUpdatedAt
     * @covers ::getUpdatedAt
     */
    public function testCanSetAndGetUpdatedAt(): void
    {
        $timestampable = $this->getMockForTrait(TimestampableImmutable::class);
        $datetime = new \DateTimeImmutable('2021-01-01 00:00:00.0');

        $timestampable->setUpdatedAt($datetime);

        self::assertEquals(
            $datetime,
            $timestampable->getUpdatedAt(),
            'The date and time must be the same.'
        );
    }
}
