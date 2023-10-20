<?php

namespace App\Modules\Admin\Http\Authentication;

use Modules\Admin\Repositories\AdminRepository;
use Raid\Core\Auth\Authentication\Authenticator;
use Raid\Core\Auth\Authentication\Channels\SystemAuthChannel;
use Raid\Core\Auth\Authentication\Contracts\AuthenticatorInterface;

class AdminAuthenticator extends Authenticator implements AuthenticatorInterface
{
    /**
     * {@inheritdoc}
     */
    public const AUTHENTICATOR = 'admin';

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
