<?php

namespace App\Modules\Post\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\Category\Models\Category;
use Modules\Post\Models\ModelFilter\PostFilter;
use Modules\Product\Models\Product;
use Modules\User\Models\User;
use Raid\Core\Model\Models\Model;

class PostProduct extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'post_id', 'product_id',
    ];
}
