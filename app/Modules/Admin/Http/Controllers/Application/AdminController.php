<?php

namespace Modules\Admin\Http\Controllers\Application;

use Raid\Core\Controller\Controllers\Controller;
use Modules\Admin\Repositories\AdminRepository;
use Modules\Admin\Http\Transformers\AdminTransformer;

class AdminController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = AdminRepository::class;

    /**
     * {@inheritdoc}
     */
    public const TRANSFORMER = AdminTransformer::class;
}
