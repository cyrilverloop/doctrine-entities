<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Tests;

use CyrilVerloop\DoctrineEntities\Slug;
use PHPUnit\Framework\TestCase;

/**
 * Tests the Slug trait.
 * @package \CyrilVerloop\DoctrineEntities\Tests
 *
 * @coversDefaultClass \CyrilVerloop\DoctrineEntities\Slug
 */
class SlugTest extends TestCase
{
    // Methods :

    /**
     * Tests slug can be accessed.
     * @return void
     *
     * @covers ::setSlug
     * @covers ::getSlug
     */
    public function testCanSetAndGetSlug(): void
    {
        $slugTrait = $this->getMockForTrait(Slug::class);
        $slug = 'test-slug';

        $slugTrait->setSlug($slug);

        self::assertSame(
            $slug,
            $slugTrait->getSlug(),
            'The slug must be the same.'
        );
    }
}
