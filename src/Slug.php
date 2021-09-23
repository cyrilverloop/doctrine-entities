<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\ORM\Mapping\Column;

/**
 * Trait that adds a 'slug' field to an entity.
 * @package \CyrilVerloop\DoctrineEntities
 */
trait Slug
{
    // Properties :

    /**
     * @var string the slug.
     *
     * @Column(type="string")
     */
    #[Column(type: "string")]
    protected string $slug;


    // Accessors :

    /**
     * Returns the slug.
     * @return string the slug.
     */
    public function getSlug(): string
    {
        return $this->slug;
    }


    // Mutators :

    /**
     * Changes the slug.
     * @param string $slug the slug.
     * @return void
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }
}
