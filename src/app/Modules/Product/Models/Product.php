<?php

namespace Modules\Product\Models;

use Modules\Core\Models\Casts\FloatCast;
use Modules\Core\Models\Casts\IntegerCast;
use Modules\Product\Models\ModelFilter\ProductFilter;
use Raid\Core\Model\Models\Model;

class Product extends Model
{
    /**
     * {@inheritdoc}
     */
    protected string $filter = ProductFilter::class;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'name', 'description', 'price', 'quantity',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'price' => FloatCast::class,
        'quantity' => IntegerCast::class,
    ];

    /**
     * Define shared data to be embedded to a post.
     */
    public function toAssociatePost(): array
    {
        return $this->attributes('id', 'name', 'price');
    }
}
