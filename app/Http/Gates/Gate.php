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
        'get_profile',
    ];

    /**
     * Determine if can get profile.
     */
    public function getProfile(): bool
    {
        return true;
    }
}
