<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests\Timestampable;

use CyrilVerloop\DoctrineEntities\Timestampable\CreatedAt;
use PHPUnit\Framework\TestCase;

/**
 * Tests the CreatedAt trait.
 * @package \CyrilVerloop\DoctrineEntities\Tests
 *
 * @coversDefaultClass \CyrilVerloop\DoctrineEntities\Timestampable\CreatedAt
 */
class CreatedAtTest extends TestCase
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
        $createdAt = $this->getMockForTrait(CreatedAt::class);
        $datetime = new \DateTime('2021-01-01 00:00:00.0');

        $createdAt->setCreatedAt($datetime);

        self::assertSame(
            $datetime,
            $createdAt->getCreatedAt(),
            'The date and time must be the same.'
        );
    }
}
