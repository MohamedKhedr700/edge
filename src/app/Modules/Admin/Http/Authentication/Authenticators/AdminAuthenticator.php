<?php

namespace Modules\Admin\Http\Authentication\Authenticators;

use Modules\Admin\Repositories\AdminRepository;
use Modules\Core\Http\Authentication\Enums\Authenticator as AuthenticatorEnum;
use Raid\Core\Auth\Authentication\Authenticator;
use Raid\Core\Auth\Authentication\Channels\SystemAuthChannel;
use Raid\Core\Auth\Authentication\Contracts\AuthenticatorInterface;

class AdminAuthenticator extends Authenticator implements AuthenticatorInterface
{
    /**
     * {@inheritdoc}
     */
    public const AUTHENTICATOR = AuthenticatorEnum::USER;

    /**
     * {@inheritdoc}
     */
    public const AUTHENTICATABLE = AdminRepository::class;

    /**
     * {@inheritdoc}
     */
    public const CHANNELS = [
        SystemAuthChannel::class,
    ];
}
