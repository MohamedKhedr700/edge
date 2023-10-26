<?php

namespace Modules\Category\Services;

use Modules\Category\Repositories\CategoryRepository;
use Raid\Core\Repository\Services\ActionService;
use Raid\Core\Repository\Services\Contracts\ActionServiceInterface;

class CategoryService extends ActionService implements ActionServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = CategoryRepository::class;
}
