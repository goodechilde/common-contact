<?php

namespace Goodechilde\CommonContact\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Phone extends Model
{
    use SoftDeletes;
    use Userstamps;

    protected $guarded = [ 'id' ];
    protected $with = ['contactType'];

    public function contactType()
    {
        return $this->hasOne(ContactType::class, 'id', 'contact_type');
    }

    public function phoneable()
    {
        return $this->morphTo();
    }
}
