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
        'register', 'login', 'getProfile',
    ];

    /**
     * Determine if can register.
     */
    public function register(): bool
    {
        return true;
    }

    /**
     * Determine if can login.
     */
    public function login(): bool
    {
        return true;
    }

    /**
     * Determine if can get profile.
     */
    public function getProfile(): bool
    {
        dd('ss');

        return true;
    }
}
