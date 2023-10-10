<?php

namespace App\Models\ModelFilters;

use Raid\Core\Model\Models\Filter\ModelFilter;

class UserFilter extends ModelFilter
{
    /**
     * Filter with phone.
     */
    public function phone(string $phone): static
    {
        return $this->whereLike('phone', $phone);
    }
}
