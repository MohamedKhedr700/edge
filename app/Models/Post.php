<?php

namespace App\Models;

use Raid\Core\Action\Traits\Action\Actionable;
use Raid\Core\Model\Models\Contracts\ModelInterface;
use Raid\Core\Model\Models\Model;

class Post extends Model implements ModelInterface
{
    use Actionable;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [];
}
