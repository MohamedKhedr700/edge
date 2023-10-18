<?php

namespace Modules\User\Http\Authentication\Workers;

use Raid\Core\Auth\Authentication\AuthWorker;
use Raid\Core\Auth\Authentication\Contracts\AuthWorkerInterface;

class PhoneWorker extends AuthWorker implements AuthWorkerInterface
{
    /**
     * {@inheritdoc}
     */
    public const WORKER = 'phone';
}
