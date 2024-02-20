<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a 'slug' field to an entity.
 */
trait Slug
{
    // Properties :

    /**
     * @var null|string the slug.
     *
     * @ORM\Column(type="string", nullable=true)
     */
    #[ORM\Column(type: Types::STRING, nullable: true)]
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
