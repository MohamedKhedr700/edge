<?php

namespace Modules\User\Models;

use Modules\User\Models\ModelFilter\UserFilter;
use Raid\Core\Model\Models\Model;

class User extends Model
{
    /**
     * {@inheritdoc}
     */
    protected string $filter = UserFilter::class;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        //
    ];
}
