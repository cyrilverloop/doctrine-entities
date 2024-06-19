<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\AbstractIntId;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the IntId abstract entity.
 */
#[
    PA\CoversClass(AbstractIntId::class),
    PA\Group('abstractIntId')
]
final class AbstractIntIdTest extends TestCase
{
    // Methods :

    /**
     * Tests that the method can return the identifier/primary key.
     */
    public function testCanGetId(): void
    {
        $abstractIntId = new class extends AbstractIntId {
        };

        self::assertNull($abstractIntId->getId(), 'The IDs must be the same.');
    }
}
