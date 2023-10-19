<?php

namespace App\Modules\User\Listeners;

use Modules\User\Actions\Crud\UpdateUserAction;
use Raid\Core\Auth\Authentication\Contracts\AuthChannelInterface;
use Raid\Core\Event\Events\Contracts\EventListenerInterface;

class UpdateLastLoginIp implements EventListenerInterface
{
    /**
     * Update user action instance.
     */
    protected UpdateUserAction $updateUserAction;

    /**
     * Create a new listener instance.
     */
    public function __construct(UpdateUserAction $updateUserAction)
    {
        $this->updateUserAction = $updateUserAction;
    }

    /**
     * Handle the listener.
     */
    public function handle(AuthChannelInterface $authChannel): void
    {
        $account = $authChannel->account();

        $this->updateUserAction->execute($account, [
            'last_login_ip' => request()->ip(),
        ]);
    }
}
