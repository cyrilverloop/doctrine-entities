<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait that adds an integer 'id'
 * as identifier/primary key.
 */
trait IntId
{
    // Properties :

    /**
     * @var null|int the identifier/primary key.
     *
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned":true})
     * @ORM\GeneratedValue
     */
    #[
        ORM\Id,
        ORM\Column(
            type: Types::INTEGER,
            options: ["unsigned" => true]
        ),
        ORM\GeneratedValue(strategy: "AUTO")
    ]
    protected ?int $id;


    // Accessors :

    /**
     * Returns the identifier/primary key.
     * @return null|int the identifier/primary key.
     */
    public function getId(): ?int
    {
        return $this->id;
    }
}
