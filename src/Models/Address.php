<?php

namespace Goodechilde\CommonContact\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use League\ISO3166\ISO3166DataProvider;
use Propaganistas\LaravelPhone\PhoneNumber;
use Wildside\Userstamps\Userstamps;

class Address extends Model
{
    use SoftDeletes;
    use Userstamps;

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

    public function getCountryDetailAttribute()
    {
        return (new \League\ISO3166\ISO3166())->alpha3($this->country);
    }
}
