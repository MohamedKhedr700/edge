<?php

namespace App\Modules\Admin\Http\Controllers\Application;

use App\Modules\Admin\Actions\Auth\LoginAdminAction;
use App\Modules\Admin\Http\Requests\LoginAdminRequest;
use Modules\Admin\Http\Transformers\AdminTransformer;
use Modules\Admin\Repositories\AdminRepository;
use Raid\Core\Controller\Controllers\Controller;

class LoginController extends Controller
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
     * Login the admin.
     */
    public function login(LoginAdminRequest $request, LoginAdminAction $loginAdminAction)
    {
        $authChannel = $loginAdminAction->execute($request->passed());

        return $this->success('', [
            'channel' => $authChannel->channel(),
            'token' => $authChannel->stringToken(),
            'errors' => $authChannel->errors(),
            'resource' => $authChannel->account() ? $this->fractalItem($authChannel->account(), $this->getTransformer()) : null,
        ]);
    }
}
