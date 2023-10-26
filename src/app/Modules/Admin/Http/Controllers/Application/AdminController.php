<?php

namespace Modules\Admin\Http\Controllers\Application;

use Modules\Admin\Http\Transformers\AdminTransformer;
use Modules\Admin\Repositories\AdminRepository;
use Raid\Core\Controller\Controllers\Controller;

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
