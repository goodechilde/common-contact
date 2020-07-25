<?php

namespace Goodechilde\CommonContact\Traits;

use Goodechilde\CommonContact\Models\Phone;

trait HasPhones
{
    public function phones()
    {
        return $this->morphMany(Phone::class, 'phoneable');
    }
}
