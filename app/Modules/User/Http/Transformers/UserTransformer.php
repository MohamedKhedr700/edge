<?php

namespace Modules\User\Http\Transformers;

use Raid\Core\Repository\Transformers\Transformer;
use Modules\User\Models\User;

class UserTransformer extends Transformer
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
