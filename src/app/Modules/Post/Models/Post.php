<?php

namespace Modules\Post\Models;

use App\Modules\Post\Models\PostProduct;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Category\Models\Category;
use Modules\Post\Models\ModelFilter\PostFilter;
use Modules\Product\Models\Product;
use Modules\User\Models\User;
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
        'title', 'content', 'category_id',
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
        if (! auth_check('user')) {
            return;
        }

        static::addGlobalScope('created_by', function ($query) {
            $query->where('created_by', account()->accountId());
        });
    }

    /**
     * Get the author that owns the post.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Get the category that owns the post.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * The products that belong to the post.
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, null, 'post_ids', 'product_ids')
            ->using(PostProduct::class)
            ->withPivot('id')
            ->withTimestamps();
    }
}
