<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\Timestampable;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Timestampable trait.
 *
 * @coversDefaultClass \CyrilVerloop\DoctrineEntities\Timestampable
 */
final class TimestampableTest extends TestCase
{
    // Methods :

    /**
     * Test that the creation date and time can be accessed.
     *
     * @covers ::setCreatedAt
     * @covers ::getCreatedAt
     */
    public function testCanSetAndGetCreatedAt(): void
    {
        $timestampable = $this->getMockForTrait(Timestampable::class);
        $datetime = new \DateTime('2021-01-01 00:00:00.0');

        $timestampable->setCreatedAt($datetime);

        self::assertSame(
            $datetime,
            $timestampable->getCreatedAt(),
            'The date and time must be the same.'
        );
    }

    /**
     * Test that the update date and time can be accessed.
     *
     * @covers ::setUpdatedAt
     * @covers ::getUpdatedAt
     */
    public function testCanSetAndGetUpdatedAt(): void
    {
        $timestampable = $this->getMockForTrait(Timestampable::class);
        $datetime = new \DateTime('2021-01-01 00:00:00.0');

        $timestampable->setUpdatedAt($datetime);

        self::assertEquals(
            $datetime,
            $timestampable->getUpdatedAt(),
            'The date and time must be the same.'
        );
    }
}
