<?php

namespace Modules\Product\Http\Controllers\Dashboard;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Modules\Product\Actions\Crud\CreateProductAction;
use Modules\Product\Actions\Crud\DeleteProductAction;
use Modules\Product\Actions\Crud\FindProductAction;
use Modules\Product\Actions\Crud\ListProductAction;
use Modules\Product\Actions\Crud\UpdateProductAction;
use Modules\Product\Http\Requests\ListProductRequest;
use Modules\Product\Http\Requests\StoreProductRequest;
use Modules\Product\Http\Requests\UpdateProductRequest;
use Modules\Product\Models\Product;
use Modules\Product\Repositories\ProductRepository;
use Raid\Core\Controller\Controllers\Controller;
use Raid\Core\Request\Exceptions\UnvalidatedRequestException;

class ProductController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public const REPOSITORY = ProductRepository::class;

    /**
     * Store a new resource.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function store(StoreProductRequest $request, CreateProductAction $createProductAction): JsonResponse
    {
        return parent::storeResource($request, $createProductAction);
    }

    /**
     * List resources.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function index(ListProductRequest $request, ListProductAction $listProductAction): JsonResponse
    {
        return parent::listResources($request, $listProductAction);
    }

    /**
     * Show resource.
     *
     * @throws AuthorizationException
     */
    public function show(Product $id, FindProductAction $findProductAction): JsonResponse
    {
        return parent::showResource($id, $findProductAction);
    }

    /**
     * Update resource.
     *
     * @throws AuthorizationException|UnvalidatedRequestException
     */
    public function update(UpdateProductRequest $request, Product $id, UpdateProductAction $updateProductAction): JsonResponse
    {
        return parent::updateResource($request, $id, $updateProductAction);
    }

    /**
     * Delete resource.
     *
     * @throws AuthorizationException
     */
    public function delete(Product $id, DeleteProductAction $deleteProductAction): JsonResponse
    {
        return parent::deleteResource($id, $deleteProductAction);
    }
}
