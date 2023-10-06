<?php

namespace App\Models;

use App\Events\CreatePostEvent;
use App\Http\Gates\PostGate;
use Raid\Core\Event\Traits\Event\Eventable;
use Raid\Core\Gate\Traits\Gate\Gateable;
use Raid\Core\Model\Models\Contracts\ModelInterface;
use Raid\Core\Model\Models\Model;

class Post extends Model implements ModelInterface
{
    use Eventable;
    use Gateable;

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

    /**
     * Get gateable gates.
     */
    public static function getGates(): array
    {
        return [
            PostGate::class,
        ];
    }
}
