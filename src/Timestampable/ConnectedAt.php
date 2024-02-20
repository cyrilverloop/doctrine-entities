<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\Timestampable;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a 'connected_at' field to an entity.
 */
trait ConnectedAt
{
    // Properties :

    /**
     * @var null|\DateTime the date and time of the connection.
     *
     * @ORM\Column(type="datetime", name="connected_at", nullable=true)
     */
    #[ORM\Column(type: Types::DATETIME_MUTABLE, name: "connected_at", nullable: true)]
    protected ?\DateTime $connectedAt;


    // Accessors :

    /**
     * Returns the date and time of the connection
     * @return null|\DateTime the date and time of the connection
     */
    public function getConnectedAt(): ?\DateTime
    {
        return $this->connectedAt;
    }


    // Mutators :

    /**
     * Changes the date and time of the connection
     * @param null|\DateTime $connectedAt the date and time of the connection
     */
    public function setConnectedAt(?\DateTime $connectedAt): void
    {
        $this->connectedAt = $connectedAt;
    }
}
