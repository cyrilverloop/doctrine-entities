<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\Slug;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Slug trait.
 */
#[
    PA\CoversTrait(Slug::class),
    PA\Group('slug')
]
final class SlugTest extends TestCase
{
    // Methods :

    /**
     * Tests a slug can be accessed.
     */
    public function testCanSetAndGetASlug(): void
    {
        $slugTrait = new class {
            use Slug;

            public function __construct()
            {
                $this->slug = null;
            }
        };

        $slugTrait->setSlug('test-slug');

        self::assertSame(
            'test-slug',
            $slugTrait->getSlug()
        );
    }


    /**
     * Tests a null slug can be accessed.
     */
    public function testCanSetAndGetANullSlug(): void
    {
        $slugTrait = new class {
            use Slug;

            public function __construct()
            {
                $this->slug = 'test-slug';
            }
        };

        $slugTrait->setSlug(null);

        self::assertNull($slugTrait->getSlug());
    }
}
