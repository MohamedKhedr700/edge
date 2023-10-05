<?php

namespace App\Models;

use App\Events\CreatePostEvent;
use Raid\Core\Event\Traits\Event\Eventable;
use Raid\Core\Model\Models\Contracts\ModelInterface;
use Raid\Core\Model\Models\Model;

class Post extends Model implements ModelInterface
{
    use Eventable;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [];

    /**
     * Get eventable events.
     */
    public static function getEvents(): array
    {
        return [
            CreatePostEvent::class,
        ];
    }
}
