<?php

namespace Goodechilde\CommonContact\Traits;

use Goodechilde\CommonContact\Models\EmailAddress;

trait HasEmailAddresses
{
    public function emailaddresses()
    {
        return $this->morphMany(EmailAddress::class, 'emailaddressable');
    }
}
