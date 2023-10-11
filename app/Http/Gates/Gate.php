<?php

namespace App\Http\Gates;

use Raid\Core\Gate\Gates\Contracts\GateInterface;
use Raid\Core\Gate\Gates\Gate as RaidGate;

class Gate extends RaidGate implements GateInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTIONS = [
        'profile',
    ];

    /**
     * Determine if user can get profile.
     */
    public function profile(): bool
    {
        return true;
    }
}
