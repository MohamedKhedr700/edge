<?php

namespace Modules\Category\Models;

use Modules\Category\Models\ModelFilter\CategoryFilter;
use Raid\Core\Model\Models\Model;

class Category extends Model
{
    /**
     * {@inheritdoc}
     */
    protected string $filter = CategoryFilter::class;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [];
}
