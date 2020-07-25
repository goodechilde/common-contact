<?php

namespace Goodechilde\CommonContact\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmailAddress extends Model
{
     use SoftDeletes;

    protected $guarded = [ 'id' ];
    protected $with = ['contactType'];

    public function contactType()
    {
        return $this->hasOne(ContactType::class, 'id', 'contact_type');
    }

    public function emailaddressable()
    {
        return $this->morphTo();
    }
}
