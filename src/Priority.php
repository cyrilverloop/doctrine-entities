<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds a 'priority' field to an entity.
 */
trait Priority
{
    // Properties :

    /**
     * @var int the priority.
     *
     * @ORM\Column(
     *     type="smallint",
     *     options={
     *         "default": 0
     *     }
     * )
     */
    #[
        ORM\Column(
            type: Types::SMALLINT,
            options: [
                "default" => 0
            ]
        )
    ]
    protected int $priority;


    // Accessors :

    /**
     * Returns the priority.
     * @return int the priority.
     */
    public function getPriority(): int
    {
        return $this->priority;
    }


    // Mutators :

    /**
     * Changes the priority.
     * @param int $priority the priority.
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }
}
