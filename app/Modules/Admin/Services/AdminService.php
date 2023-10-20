<?php

namespace Modules\Admin\Services;

use Modules\Admin\Repositories\AdminRepository;
use Raid\Core\Repository\Services\ActionService;
use Raid\Core\Repository\Services\Contracts\ActionServiceInterface;

class AdminService extends ActionService implements ActionServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = AdminRepository::class;
}
