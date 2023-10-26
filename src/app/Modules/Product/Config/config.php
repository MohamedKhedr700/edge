<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Module model
    |--------------------------------------------------------------------------
    */

    'model' => \Modules\Product\Models\Product::class,

    /*
    |--------------------------------------------------------------------------
    | Module Transformer
    |--------------------------------------------------------------------------
    */

    'transformer' => \Modules\Product\Http\Transformers\ProductTransformer::class,

    /*
    |--------------------------------------------------------------------------
    | Module Actions
    |--------------------------------------------------------------------------
    */

    'actions' => [
        \Modules\Product\Actions\Crud\CreateProductAction::class,
        \Modules\Product\Actions\Crud\DeleteProductAction::class,
        \Modules\Product\Actions\Crud\FindProductAction::class,
        \Modules\Product\Actions\Crud\FindByProductAction::class,
        \Modules\Product\Actions\Crud\ListProductAction::class,
        \Modules\Product\Actions\Crud\UpdateProductAction::class,
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
        \Modules\Product\Http\Gates\ProductGate::class,
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
