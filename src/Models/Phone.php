<?php

namespace Goodechilde\CommonContact\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone extends Model
{
    // use SoftDeletes;

    protected $guarded = [ 'id' ];

    public function contactType()
    {
        return $this->hasOne(ContactType::class, 'id', 'contact_type');
    }

    public function phoneable()
    {
        return $this->morphTo();
    }
}
