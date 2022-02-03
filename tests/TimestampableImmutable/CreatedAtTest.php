<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests\TimestampableImmutable;

use CyrilVerloop\DoctrineEntities\TimestampableImmutable\CreatedAt;
use PHPUnit\Framework\TestCase;

/**
 * Tests the CreatedAt trait.
 *
 * @coversDefaultClass \CyrilVerloop\DoctrineEntities\TimestampableImmutable\CreatedAt
 */
final class CreatedAtTest extends TestCase
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
        $createdAt = $this->getMockForTrait(CreatedAt::class);
        $datetime = new \DateTimeImmutable('2021-01-01 00:00:00.0');

        $createdAt->setCreatedAt($datetime);

        self::assertSame(
            $datetime,
            $createdAt->getCreatedAt(),
            'The date and time must be the same.'
        );
    }
}
