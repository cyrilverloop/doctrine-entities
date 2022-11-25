<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests\TimestampableImmutable;

use CyrilVerloop\DoctrineEntities\TimestampableImmutable\ConnectedAt;
use PHPUnit\Framework\TestCase;

/**
 * Tests the ConnectedAt trait.
 *
 * @coversDefaultClass \CyrilVerloop\DoctrineEntities\TimestampableImmutable\ConnectedAt
 * @group connectedAtImmutable
 */
final class ConnectedAtTest extends TestCase
{
    // Methods :

    /**
     * Test that the connection date and time can be accessed.
     *
     * @covers ::setConnectedAt
     * @covers ::getConnectedAt
     */
    public function testCanSetAndGetConnectedAt(): void
    {
        $connectedAt = $this->getMockForTrait(ConnectedAt::class);
        $datetime = new \DateTimeImmutable('2021-01-01 00:00:00.0');

        $connectedAt->setConnectedAt($datetime);

        self::assertSame(
            $datetime,
            $connectedAt->getConnectedAt(),
            'The date and time must be the same.'
        );
    }
}
