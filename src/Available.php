<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds an 'available' field to an entity.
 * @package \CyrilVerloop\DoctrineEntities
 */
trait Available
{
    // Properties :

    /**
     * @var boolean true if available, else false.
     *
     * @ORM\Column(type="boolean")
     */
    protected bool $available;


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
     * @return void
     */
    public function setAvailable(bool $available): void
    {
        $this->available = $available;
    }
}
