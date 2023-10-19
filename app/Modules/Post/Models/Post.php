<?php

namespace Modules\Post\Models;

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
    protected $fillable = [];
}
