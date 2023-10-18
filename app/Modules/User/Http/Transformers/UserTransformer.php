<?php

namespace Modules\User\Http\Transformers;

use Modules\User\Models\User;

class UserTransformer extends Trans
{
    /**
     * Transform the resource into an array.
     */
    public function transform(User $user): array
    {
        return [
           //
        ];
    }
}
