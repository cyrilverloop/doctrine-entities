<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a nullable 'description' field to an entity.
 */
trait NullableDescription
{
    // Properties :

    /**
     * @var null|string the description.
     */
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    protected ?string $description;


    // Accessors :

    /**
     * Returns the description.
     * @return null|string the description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }


    // Mutators :

    /**
     * Changes the description.
     * @param null|string $description the description.
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
}
