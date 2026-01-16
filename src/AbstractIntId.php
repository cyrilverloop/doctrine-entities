<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use Doctrine\ORM\Mapping as ORM;

/**
 * A mapped superclass with an int
 * as identifier/primary key.
 *
 * @psalm-api
 */
#[ORM\MappedSuperclass]
abstract class AbstractIntId implements IntIdInterface
{
    // Traits :
    use IntId;


    // Magic methods :

    /**
     * The constructor.
     */
    public function __construct()
    {
        $this->id = null;
    }
}
