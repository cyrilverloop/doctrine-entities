<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Timestampable;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a 'created_at' field to an entity.
 */
trait CreatedAt
{
    // Properties :

    /**
     * @var \DateTime the date and time of the creation.
     *
     * @ORM\Column(type="datetime", name="created_at")
     */
    #[ORM\Column(type: "datetime", name: "created_at")]
    protected \DateTime $createdAt;


    // Accessors :

    /**
     * Returns the date and time of the creation.
     * @return \DateTime the date and time of the creation.
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }


    // Mutators :

    /**
     * Changes the date and time of the creation.
     * @param \DateTime $createdAt the date and time of the creation.
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
