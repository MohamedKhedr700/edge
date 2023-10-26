<?php

namespace Modules\Product\Models;

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
    protected $fillable = [];
}
