<?php

namespace Modules\Core\Models\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsInboundAttributes;

class FloatCast implements CastsInboundAttributes
{
    /**
     * {@inheritdoc}
     */
    public function set($model, string $key, $value, array $attributes)
    {
        return (float) $value;
    }
}
