<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

/**
 * An interface for integer id.
 */
interface IntIdInterface
{
    // Accessors :

    /**
     * Returns the identifier/primary key.
     * @return null|int the identifier/primary key.
     */
    public function getId(): ?int;
}
