<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\TimestampableImmutable;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a 'created_at' field to an entity.
 * @package \CyrilVerloop\DoctrineEntities\TimestampableImmutable
 */
trait CreatedAt
{
    // Properties :

    /**
     * @var \DateTimeImmutable the date and time of the creation.
     *
     * @ORM\Column(type="datetime", name="created_at")
     */
    protected \DateTimeImmutable $createdAt;


    // Accessors :

    /**
     * Returns the date and time of the creation.
     * @return \DateTimeImmutable the date and time of the creation.
     */
    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }


    // Mutators :

    /**
     * Changes the date and time of the creation.
     * @param \DateTimeImmutable $createdAt the date and time of the creation.
     * @return void
     */
    public function setCreatedAt(\DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
