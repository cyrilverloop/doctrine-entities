<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities\TimestampableImmutable;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a 'connected_at' field to an entity.
 */
trait ConnectedAt
{
    // Properties :

    /**
     * @var null|\DateTimeImmutable the date and time of the connection.
     *
     * @ORM\Column(type="datetime", name="connected_at", nullable=true)
     */
    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, name: "connected_at", nullable: true)]
    protected ?\DateTimeImmutable $connectedAt;


    // Accessors :

    /**
     * Returns the date and time of the connection
     * @return null|\DateTimeImmutable the date and time of the connection
     */
    public function getConnectedAt(): ?\DateTimeImmutable
    {
        return $this->connectedAt;
    }


    // Mutators :

    /**
     * Changes the date and time of the connection
     * @param null|\DateTimeImmutable $connectedAt the date and time of the connection
     */
    public function setConnectedAt(?\DateTimeImmutable $connectedAt): void
    {
        $this->connectedAt = $connectedAt;
    }
}
