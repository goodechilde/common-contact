<?php

namespace Goodechilde\CommonContact\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class ContactType extends Model
{
    use SoftDeletes;

    protected $guarded = [ 'id' ];
    //
}
