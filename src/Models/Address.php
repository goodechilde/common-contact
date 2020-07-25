<?php

namespace Goodechilde\CommonContact\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
     use SoftDeletes;

    protected $guarded = [ 'id' ];
    protected $with = ['contactType'];

    public function contactType()
    {
        return $this->hasOne(ContactType::class, 'id', 'contact_type');
    }

    public function addressable()
    {
        return $this->morphTo();
    }
}
