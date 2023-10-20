<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Module model
    |--------------------------------------------------------------------------
    */

    'model' => \Modules\Admin\Models\Admin::class,

    /*
    |--------------------------------------------------------------------------
    | Module Actions
    |--------------------------------------------------------------------------
    */

    'actions' => [
        \Modules\Admin\Actions\Crud\CreateAdminAction::class,
        \Modules\Admin\Actions\Crud\DeleteAdminAction::class,
        \Modules\Admin\Actions\Crud\FindAdminAction::class,
        \Modules\Admin\Actions\Crud\FindByAdminAction::class,
        \Modules\Admin\Actions\Crud\ListAdminAction::class,
        \Modules\Admin\Actions\Crud\UpdateAdminAction::class,
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
        \Modules\Admin\Http\Gates\AdminGate::class,
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
