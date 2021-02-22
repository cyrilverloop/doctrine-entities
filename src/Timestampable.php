<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use CyrilVerloop\DoctrineEntities\Timestampable\CreatedAt;
use CyrilVerloop\DoctrineEntities\Timestampable\UpdatedAt;

/**
 * Trait that adds a 'created_at' and an 'updated_at' fields to an entity.
 * @package \CyrilVerloop\DoctrineEntities
 */
trait Timestampable
{
    // Traits :
    use CreatedAt;
    use UpdatedAt;
}
