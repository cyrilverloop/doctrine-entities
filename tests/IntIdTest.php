<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\IntId;
use PHPUnit\Framework\TestCase;

/**
 * Tests the IntId abstract entity.
 * @package \CyrilVerloop\DoctrineEntities\Tests
 *
 * @coversDefaultClass \CyrilVerloop\DoctrineEntities\IntId
 * @covers ::__construct
 */
class IntIdTest extends TestCase
{
    // Methods :

    /**
     * Tests that the method can return the identifier/primary key.
     *
     * @covers ::getId
     */
    public function testCanGetId(): void
    {
        $intId = $this->getMockForAbstractClass(IntId::class);

        self::assertSame(-1, $intId->getId(), 'The IDs must be the same.');
    }
}
