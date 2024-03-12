<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\IntId;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the IntId abstract entity.
 */
#[
    PA\CoversClass(IntId::class),
    PA\Group('intId')
]
final class IntIdTest extends TestCase
{
    // Methods :

    /**
     * Tests that the method can return the identifier/primary key.
     */
    public function testCanGetId(): void
    {
        $intId = new class extends IntId {
        };

        self::assertNull($intId->getId(), 'The IDs must be the same.');
    }
}
