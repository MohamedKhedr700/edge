<?php

namespace App\Http\Authentication\Authenticator;

use App\Http\Authentication\Channels\OtpChannel;
use App\Models\User;
use Raid\Core\Auth\Authentication\Channels\SystemAuthChannel;
use Raid\Core\Auth\Authentication\Contracts\AuthenticatorInterface;
use Raid\Core\Auth\Authentication\Authenticator;

class UserAuthenticator extends Authenticator implements AuthenticatorInterface
{
    /**
     * {@inheritdoc}
     */
    public const AUTHENTICATOR = 'user';

    /**
     * {@inheritdoc}
     */
    public const AUTHENTICATABLE = User::class;

    /**
     * {@inheritdoc}
     */
    public const CHANNELS = [
        OtpChannel::class,
        SystemAuthChannel::class,
    ];
}
