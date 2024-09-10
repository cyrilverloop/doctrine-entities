<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\Description;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Description trait.
 */
#[
    PA\CoversTrait(Description::class),
    PA\Group('description')
]
final class DescriptionTest extends TestCase
{
    // Methods :

    /**
     * Tests a description can be accessed.
     */
    public function testCanSetAndGetADescription(): void
    {
        $descriptionTrait = new class {
            use Description;

            public function __construct()
            {
                $this->description = '';
            }
        };

        $descriptionTrait->setDescription('test-description');

        self::assertSame(
            'test-description',
            $descriptionTrait->getDescription()
        );
    }
}
