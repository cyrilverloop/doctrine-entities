<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\ORM\Mapping\Column;

/**
 * Trait that adds a 'slug' field to an entity.
 */
trait Slug
{
    // Properties :

    /**
     * @var null|string the slug.
     *
     * @Column(type="string", nullable=true)
     */
    #[Column(type: "string", nullable: true)]
    protected ?string $slug;


    // Accessors :

    /**
     * Returns the slug.
     * @return null|string the slug.
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }


    // Mutators :

    /**
     * Changes the slug.
     * @param null|string $slug the slug.
     */
    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }
}
