<?php

namespace Modules\User\Listeners;

use Modules\User\Models\User;
use Modules\User\Services\MailService;
use Raid\Core\Event\Events\Contracts\EventListenerInterface;
use Raid\Core\Event\Traits\Event\Queueable;

class SendRegisterEmail implements EventListenerInterface
{
    use Queueable;

    /**
     * Mail service instance.
     */
    private MailService $mailService;

    /**
     * Create a new event listener instance.
     */
    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    /**
     * Get the name of the queue the listener should be sent to.
     */
    public function onQueue(): string
    {
        return 'mail';
    }

    /**
     * Handle the listener.
     */
    public function handle(User $user): void
    {
        $this->mailService->send($user);
    }
}
