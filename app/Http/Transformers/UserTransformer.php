<?php

namespace App\Http\Transformers;

use App\Models\User;
use Raid\Core\Repository\Transformers\Transformer;

class UserTransformer extends Transformer
{
    /**
     * Transform the resource into an array.
     */
    public function transform(User $user): array
    {
        return [
            'id' => $user->attribute('id'),
            'phone' => $user->attribute('phone'),
        ];
    }
}
