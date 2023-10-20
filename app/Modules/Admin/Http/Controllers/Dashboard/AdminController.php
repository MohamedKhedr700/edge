<?php

namespace Modules\Admin\Http\Controllers\Dashboard;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Modules\Admin\Actions\Crud\CreateAdminAction;
use Modules\Admin\Actions\Crud\DeleteAdminAction;
use Modules\Admin\Actions\Crud\FindAdminAction;
use Modules\Admin\Actions\Crud\ListAdminAction;
use Modules\Admin\Actions\Crud\UpdateAdminAction;
use Modules\Admin\Http\Requests\ListAdminRequest;
use Modules\Admin\Http\Requests\StoreAdminRequest;
use Modules\Admin\Http\Requests\UpdateAdminRequest;
use Modules\Admin\Http\Transformers\AdminTransformer;
use Modules\Admin\Models\Admin;
use Modules\Admin\Repositories\AdminRepository;
use Raid\Core\Controller\Controllers\Controller;
use Raid\Core\Request\Exceptions\UnvalidatedRequestException;

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

    /**
     * Store a new resource.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function store(StoreAdminRequest $request, CreateAdminAction $createAdminAction): JsonResponse
    {
        return parent::storeResource($request, $createAdminAction);
    }

    /**
     * List resources.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function index(ListAdminRequest $request, ListAdminAction $listAdminAction): JsonResponse
    {
        return parent::listResources($request, $listAdminAction);
    }

    /**
     * Show resource.
     *
     * @throws AuthorizationException
     */
    public function show(Admin $id, FindAdminAction $findAdminAction): JsonResponse
    {
        return parent::showResource($id, $findAdminAction);
    }

    /**
     * Update resource.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function update(UpdateAdminRequest $request, Admin $id, UpdateAdminAction $updateAdminAction): JsonResponse
    {
        return parent::updateResource($request, $id, $updateAdminAction);
    }

    /**
     * Delete resource.
     *
     * @throws AuthorizationException
     */
    public function delete(Admin $id, DeleteAdminAction $deleteAdminAction): JsonResponse
    {
        return parent::deleteResource($id, $deleteAdminAction);
    }
}
