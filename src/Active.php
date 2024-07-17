<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds an 'active' field to an entity.
 */
trait Active
{
    // Properties :

    /**
     * @var bool true if active, else false.
     *
     * @ORM\Column(type="boolean")
     */
    #[ORM\Column(type: Types::BOOLEAN)]
    protected bool $active;


    // Accessors :

    /**
     * Returns the active state.
     * @return bool the active state.
     */
    public function isActive(): bool
    {
        return $this->active;
    }


    // Mutators :

    /**
     * Changes the active state.
     * @param bool $active the active state.
     */
    public function setActive(bool $active): void
    {
        $this->active = $active;
    }
}
