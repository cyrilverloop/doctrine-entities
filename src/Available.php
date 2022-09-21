<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\ORM\Mapping\Column;

/**
 * Trait that adds an 'available' field to an entity.
 */
trait Available
{
    // Properties :

    /**
     * @var bool true if available, else false.
     *
     * @Column(type="boolean")
     */
    #[Column(type: "boolean")]
    private bool $available;


    // Accessors :

    /**
     * Returns the availability.
     * @return bool the availability.
     */
    public function isAvailable(): bool
    {
        return $this->available;
    }


    // Mutators :

    /**
     * Changes the availability.
     * @param bool $available the availability.
     */
    public function setAvailable(bool $available): void
    {
        $this->available = $available;
    }
}
