<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a 'description' field to an entity.
 */
trait Description
{
    // Properties :

    /**
     * @var string the description.
     *
     * @ORM\Column(type="text")
     */
    #[ORM\Column(type: Types::TEXT)]
    protected string $description;


    // Accessors :

    /**
     * Returns the description.
     * @return string the description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }


    // Mutators :

    /**
     * Changes the description.
     * @param string $description the description.
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
