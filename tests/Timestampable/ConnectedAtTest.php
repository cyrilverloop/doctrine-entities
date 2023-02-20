<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests\Timestampable;

use CyrilVerloop\DoctrineEntities\Timestampable\ConnectedAt;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the ConnectedAt trait.
 */
#[
    PA\CoversClass(ConnectedAt::class),
    PA\Group('connectedAt')
]
final class ConnectedAtTest extends TestCase
{
    // Methods :

    /**
     * Test that the connection date and time can be accessed.
     */
    public function testCanSetAndGetConnectedAt(): void
    {
        $connectedAt = $this->getMockForTrait(ConnectedAt::class);
        $datetime = new \DateTime('2021-01-01 00:00:00.0');

        $connectedAt->setConnectedAt($datetime);

        self::assertSame(
            $datetime,
            $connectedAt->getConnectedAt(),
            'The date and time must be the same.'
        );
    }
}
