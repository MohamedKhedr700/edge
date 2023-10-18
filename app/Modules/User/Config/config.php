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
        \Modules\User\Actions\Crud\CreateUserAction::class,
        \Modules\User\Actions\Crud\DeleteUserAction::class,
        \Modules\User\Actions\Crud\FindUserAction::class,
        \Modules\User\Actions\Crud\FindByUserAction::class,
        \Modules\User\Actions\Crud\ListUserAction::class,
        \Modules\User\Actions\Crud\UpdateUserAction::class,
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
        \Modules\User\Http\Gates\UserGate::class,
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
