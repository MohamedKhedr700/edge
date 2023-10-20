<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Module Configurations
    |--------------------------------------------------------------------------
    */

    'model' => \Modules\Category\Models\Category::class,

    'transformer' => \Modules\Category\Http\Transformers\CategoryTransformer::class,

    'route_service_provider' => \Modules\Category\Providers\RouteServiceProvider::class,

    /*
    |--------------------------------------------------------------------------
    | Module Actions
    |--------------------------------------------------------------------------
    */

    'actions' => [
        \Modules\Category\Actions\Crud\CreateCategoryAction::class,
        \Modules\Category\Actions\Crud\DeleteCategoryAction::class,
        \Modules\Category\Actions\Crud\FindCategoryAction::class,
        \Modules\Category\Actions\Crud\FindByCategoryAction::class,
        \Modules\Category\Actions\Crud\ListCategoryAction::class,
        \Modules\Category\Actions\Crud\UpdateCategoryAction::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Module Events
    |--------------------------------------------------------------------------
    */

    'events' => [],

    /*
    |--------------------------------------------------------------------------
    | Module Gates
    |--------------------------------------------------------------------------
    */

    'gates' => [
        \Modules\Category\Http\Gates\CategoryGate::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Module Error Codes
    |--------------------------------------------------------------------------
    */

    'error_codes' => [
        'create_fail' => '0000',
        'update_fail' => '0010',
        'delete_fail' => '0020',
        'login_fail' => '0030',
    ],
];
