<?php

namespace Goodechilde\CommonContact\Traits;

use Goodechilde\CommonContact\Models\SocialMediaAddress;

trait HasSocialMediaAddresses
{
    public function socialmediaaddresses()
    {
        return $this->morphMany(SocialMediaAddress::class, 'socialmediaaddressable');
    }
}
