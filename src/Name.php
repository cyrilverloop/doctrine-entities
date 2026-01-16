<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a 'name' field to an entity.
 */
trait Name
{
    // Properties :

    /**
     * @var string the name.
     */
    #[ORM\Column(type: Types::TEXT)]
    protected string $name;


    // Accessors :

    /**
     * Returns the name.
     * @return string the name.
     */
    public function getName(): string
    {
        return $this->name;
    }


    // Mutators :

    /**
     * Changes the name.
     * @param string $name the name.
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
