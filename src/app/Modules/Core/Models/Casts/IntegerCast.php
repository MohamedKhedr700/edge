<?php

namespace Modules\Core\Models\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsInboundAttributes;

class IntegerCast implements CastsInboundAttributes
{
    /**
     * {@inheritdoc}
     */
    public function set($model, string $key, $value, array $attributes)
    {
        return (int) $value;
    }
}
