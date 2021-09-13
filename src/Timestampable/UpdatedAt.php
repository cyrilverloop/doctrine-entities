<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Timestampable;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds an 'updated_at' field to an entity.
 * @package \CyrilVerloop\DoctrineEntities\Timestampable
 */
trait UpdatedAt
{
    // Properties :

    /**
     * @var null|\DateTime the date and time of the update.
     *
     * @ORM\Column(type="datetime", name="updated_at", nullable=true)
     */
    #[Column(type: "datetime", name: "updated_at", nullable: true)]
    protected ?\DateTime $updatedAt;


    // Accessors :

    /**
     * Returns the date and time of the update.
     * @return null|\DateTime the date and time of the update.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }


    // Mutators :

    /**
     * Changes the date and time of the update.
     * @param \DateTime $updatedAt the date and time of the update.
     * @return void
     */
    public function setUpdatedAt(\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}
