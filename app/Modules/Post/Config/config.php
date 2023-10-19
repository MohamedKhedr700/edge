<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Module Name
    |--------------------------------------------------------------------------
    */

    'name' => '',

    /*
    |--------------------------------------------------------------------------
    | Module Actions
    |--------------------------------------------------------------------------
    */

    'actions' => [
        \Modules\Post\Actions\Crud\CreatePostAction::class,
        \Modules\Post\Actions\Crud\DeletePostAction::class,
        \Modules\Post\Actions\Crud\FindPostAction::class,
        \Modules\Post\Actions\Crud\FindByPostAction::class,
        \Modules\Post\Actions\Crud\ListPostAction::class,
        \Modules\Post\Actions\Crud\UpdatePostAction::class,
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
        \Modules\Post\Http\Gates\PostGate::class,
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
