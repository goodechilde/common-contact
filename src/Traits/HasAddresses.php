<?php

namespace Goodechilde\CommonContact\Traits;

use Goodechilde\CommonContact\Models\Address;

trait HasAddresses
{
    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
}
