<?php

namespace Modules\User\Http\Transformers;

use Illuminate\Support\Carbon;
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
            'id' => $user->attribute('id'),
            'phone' => $user->attribute('phone'),
            'createdAt' => Carbon::parse($user->getAttribute('created_at'))->toISOString(),
        ];
    }
}
