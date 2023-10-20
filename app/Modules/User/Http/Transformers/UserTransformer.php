<?php

namespace Modules\User\Http\Transformers;

use Modules\User\Models\User;
use Raid\Core\Controller\Transformers\Transformer;

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
            'lastLoginAt' => $user->getAttribute('last_login_at')?->toIsoString(),
            'lastLoginIp' => $user->attribute('last_login_ip'),
            'isPremiumSubscribed' => $user->getAttribute('is_premium_subscribed'),
            'isSubscribed' => $user->getAttribute('is_subscribed'),
            'createdAt' => $user->getAttribute('created_at')->toIsoString(),
        ];
    }
}
