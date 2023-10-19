<?php

namespace App\Modules\User\Listeners;

use Exception;
use Modules\User\Actions\Crud\UpdateUserAction;
use Raid\Core\Auth\Authentication\Contracts\AuthChannelInterface;
use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;
use Raid\Core\Event\Events\Contracts\EventListenerInterface;
use Raid\Core\Model\Models\Contracts\ModelInterface;

class UpdateLastLoginData implements EventListenerInterface
{
    /**
     * Update user action instance.
     */
    private UpdateUserAction $updateUserAction;


    /**
     * Create a new event listener instance.
     */
    public function __construct(UpdateUserAction $updateUserAction)
    {
        $this->updateUserAction = $updateUserAction;
    }

    /**
     * Handle the listener.
     *
     * @throws Exception
     */
    public function handle(AuthChannelInterface $authChannel): void
    {
        if ($authChannel->errors()->any()) {
            return;
        }

        $this->updateUserAction->handle($authChannel->account(), [
            'last_login_at' => now(),
            'last_login_ip' => request()->ip(),
        ]);
    }
}
