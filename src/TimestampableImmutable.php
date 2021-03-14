<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineEntities;

use CyrilVerloop\DoctrineEntities\TimestampableImmutable\CreatedAt;
use CyrilVerloop\DoctrineEntities\TimestampableImmutable\UpdatedAt;

/**
 * Trait that adds a 'created_at' and an 'updated_at' fields to an entity.
 * @package \CyrilVerloop\DoctrineEntities
 */
trait TimestampableImmutable
{
    // Traits :
    use CreatedAt;
    use UpdatedAt;
}
