<?php

namespace Modules\User\Http\Transformers;

use Modules\User\Models\User;
use Raid\Core\Repository\Transformers\Transformer;

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
