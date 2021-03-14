<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests\TimestampableImmutable;

use CyrilVerloop\DoctrineEntities\TimestampableImmutable\UpdatedAt;
use PHPUnit\Framework\TestCase;

/**
 * Tests the UpdatedAt trait.
 * @package \CyrilVerloop\DoctrineEntities\Tests
 *
 * @coversDefaultClass \CyrilVerloop\DoctrineEntities\TimestampableImmutable\UpdatedAt
 */
class UpdatedAtTest extends TestCase
{
    // Methods :

    /**
     * Test that the update date and time can be accessed.
     * @return void
     *
     * @covers ::setUpdatedAt
     * @covers ::getUpdatedAt
     */
    public function testCanSetAndGetUpdatedAt(): void
    {
        $updatedAt = $this->getMockForTrait(UpdatedAt::class);
        $datetime = new \DateTimeImmutable('2021-01-01 00:00:00.0');

        $updatedAt->setUpdatedAt($datetime);

        self::assertEquals(
            $datetime,
            $updatedAt->getUpdatedAt(),
            'The date and time must be the same.'
        );
    }
}
