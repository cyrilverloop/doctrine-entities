<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\TimestampableImmutable;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds an 'updated_at' field to an entity.
 */
trait UpdatedAt
{
    // Properties :

    /**
     * @var null|\DateTimeImmutable the date and time of the update.
     *
     * @ORM\Column(type="datetime", name="updated_at", nullable=true)
     */
    #[Column(type: "datetime", name: "updated_at", nullable: true)]
    protected ?\DateTimeImmutable $updatedAt;


    // Accessors :

    /**
     * Returns the date and time of the update.
     * @return null|\DateTimeImmutable the date and time of the update.
     */
    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }


    // Mutators :

    /**
     * Changes the date and time of the update.
     * @param \DateTimeImmutable $updatedAt the date and time of the update.
     */
    public function setUpdatedAt(\DateTimeImmutable $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}
