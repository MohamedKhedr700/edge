<?php

namespace Modules\User\Http\Authentication;

use App\Modules\Core\Authentication\Channels\OtpChannel;
use Modules\User\Repositories\UserRepository;
use Raid\Core\Auth\Authentication\Authenticator;
use Raid\Core\Auth\Authentication\Channels\SystemAuthChannel;
use Raid\Core\Auth\Authentication\Contracts\AuthenticatorInterface;

class UserAuthenticator extends Authenticator implements AuthenticatorInterface
{
    /**
     * {@inheritdoc}
     */
    public const AUTHENTICATOR = 'user';

    /**
     * {@inheritdoc}
     */
    public const AUTHENTICATABLE = UserRepository::class;

    /**
     * {@inheritdoc}
     */
    public const CHANNELS = [
        OtpChannel::class,
        SystemAuthChannel::class,
    ];
}
