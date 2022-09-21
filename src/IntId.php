<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\MappedSuperclass;

/**
 * A base entity with an int
 * as identifier/primary key.
 *
 * @MappedSuperclass
 */
#[MappedSuperclass]
abstract class IntId
{
    // Properties :

    /**
     * @var null|int the identifier/primary key.
     *
     * @Id
     * @Column(type="integer", options={"unsigned":true})
     * @GeneratedValue
     */
    #[
        Id,
        Column(
            type: "integer",
            options: ["unsigned" => true]
        ),
        GeneratedValue(strategy: "AUTO")
    ]
    private ?int $id;


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
