<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="integer")
     */
    protected int $priority;


    // Accessors :

    /**
     * Renvoie the priority.
     * @return int the priority.
     */
    public function getPriority(): int
    {
        return $this->priority;
    }


    // Mutators :

    /**
     * Change the priority.
     * @param int $priority the priority.
     * @return void
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }
}
