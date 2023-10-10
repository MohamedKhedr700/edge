<?php

namespace App\Http\Gates;

use Raid\Core\Gate\Gates\Contracts\GateInterface;
use Raid\Core\Gate\Gates\Gate;

class UserGate extends Gate implements GateInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTIONS = [
        'create',
    ];

    /**
     * Determine if the user can create a post.
     */
    public function create(): bool
    {
        return true;
    }
}
