<?php

namespace Modules\Core\Models\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsInboundAttributes;

class BooleanCast implements CastsInboundAttributes
{
    /**
     * {@inheritdoc}
     */
    public function set($model, string $key, $value, array $attributes)
    {
        return (bool) $value;
    }
}
