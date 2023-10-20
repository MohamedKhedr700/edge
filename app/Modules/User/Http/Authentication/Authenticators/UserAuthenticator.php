<?php

namespace Modules\User\Http\Authentication\Authenticators;

use Modules\Core\Authentication\Channels\OtpAuthChannel;
use Modules\Core\Authentication\Enums\Authenticator as AuthenticatorEnum;
use Modules\User\Repositories\UserRepository;
use Raid\Core\Auth\Authentication\Authenticator;
use Raid\Core\Auth\Authentication\Channels\SystemAuthChannel;
use Raid\Core\Auth\Authentication\Contracts\AuthenticatorInterface;

class UserAuthenticator extends Authenticator implements AuthenticatorInterface
{
    /**
     * {@inheritdoc}
     */
    public const AUTHENTICATOR = AuthenticatorEnum::USER;

    /**
     * {@inheritdoc}
     */
    public const AUTHENTICATABLE = UserRepository::class;

    /**
     * {@inheritdoc}
     */
    public const DEFAULT_CHANNEL = OtpAuthChannel::class;

    /**
     * {@inheritdoc}
     */
    public const CHANNELS = [
        OtpAuthChannel::class,
        SystemAuthChannel::class,
    ];
}
