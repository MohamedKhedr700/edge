<?php

namespace Modules\Admin\Http\Transformers;

use Raid\Core\Controller\Transformers\Transformer;
use Modules\Admin\Models\Admin;

class AdminTransformer extends Transformer
{
    /**
     * Transform the resource into an array.
     */
    public function transform(Admin $admin): array
    {
        return [
            'id' => $admin->attribute('id'),
            'name' => $admin->attribute('name'),
            'email' => $admin->attribute('email'),
            'phone' => $admin->attribute('phone'),
            'created_at' => $admin->getAttribute('created_at')->toIsoString(),
        ];
    }
}
