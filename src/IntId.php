<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * A base entity with an int
 * as identifier/primary key.
 *
 * @ORM\MappedSuperclass
 */
#[ORM\MappedSuperclass]
abstract class IntId
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


    // Magic methods :

    /**
     * The constructor.
     */
    public function __construct()
    {
        $this->id = null;
    }


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
