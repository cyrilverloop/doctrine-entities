<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\ORM\Mapping\Column;

/**
 * Trait that adds a 'priority' field to an entity.
 * @package \CyrilVerloop\DoctrineEntities
 */
trait Priority
{
    // Properties :

    /**
     * @var int the priority.
     *
     * @Column(type="integer")
     */
    #[Column(type: "integer")]
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
     * @return void
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }
}
