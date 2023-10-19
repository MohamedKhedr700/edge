<?php

namespace Modules\Category\Http\Controllers\Dashboard;

use Modules\Category\Actions\Crud\CreateCategoryAction;
use Modules\Category\Actions\Crud\DeleteCategoryAction;
use Modules\Category\Actions\Crud\FindCategoryAction;
use Modules\Category\Actions\Crud\ListCategoryAction;
use Modules\Category\Actions\Crud\UpdateCategoryAction;
use Raid\Core\Request\Exceptions\UnvalidatedRequestException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Modules\Category\Http\Requests\StoreCategoryRequest;
use Modules\Category\Http\Requests\UpdateCategoryRequest;
use Modules\Category\Http\Requests\ListCategoryRequest;
use Modules\Category\Repositories\CategoryRepository;
use Modules\Category\Models\Category;
use Raid\Core\Controller\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = CategoryRepository::class;

    /**
     * Store a new resource.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function store(StoreCategoryRequest $request, CreateCategoryAction $createCategoryAction): JsonResponse
    {
        return parent::storeResource($request, $createCategoryAction);
    }

    /**
     * List resources.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function index(ListCategoryRequest $request, ListCategoryAction $listCategoryAction): JsonResponse
    {
        return parent::listResources($request, $listCategoryAction);
    }

    /**
     * Show resource.
     *
     * @throws AuthorizationException
     */
    public function show(Category $id, FindCategoryAction $findCategoryAction): JsonResponse
    {
        return parent::showResource($id, $findCategoryAction);
    }

    /**
     * Update resource.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function update(UpdateCategoryRequest $request, Category $id, UpdateCategoryAction $updateCategoryAction): JsonResponse
    {
        return parent::updateResource($request, $id, $updateCategoryAction);
    }

    /**
     * Delete resource.
     *
     * @throws AuthorizationException
     */
    public function delete(Category $id, DeleteCategoryAction $deleteCategoryAction): JsonResponse
    {
        return parent::deleteResource($id, $deleteCategoryAction);
    }
}
