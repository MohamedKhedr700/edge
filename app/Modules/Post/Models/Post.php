<?php

namespace Modules\Post\Models;

use Illuminate\Support\Facades\Auth;
use Modules\Post\Models\ModelFilter\PostFilter;
use Raid\Core\Model\Models\Model;

class Post extends Model
{
    /**
     * {@inheritdoc}
     */
    protected string $filter = PostFilter::class;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'title', 'content',
    ];

    /**
     * {@inheritdoc}
     */
    public static function boot(): void
    {
        parent::boot();

        static::createdByScope();
    }

    /**
     * Scope a query to only include posts created by the given account id.
     */
    public static function createdByScope(): void
    {
        if (! Auth::guard('user')->check()) {
            return;
        }

        static::addGlobalScope('created_by', function ($query) {
            $query->where('created_by', auth()->user()?->id);
        });
    }
}
