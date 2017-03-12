<?php

namespace App\Models;

use App\Models\Traits\SearchTraits\StoreSearch;
use Illuminate\Database\Eloquent\Model;
use Sleimanx2\Plastic\Searchable;

class Store extends Model
{
    use Searchable, StoreSearch;

    protected $fillable = ['name', 'slug', 'description', 'street_address', 'house_number', 'zipcode', 'website'];


	public function getRouteKeyName()
	{
    	return 'slug';
	}


    public function city()
    {
    	return $this->belongsTo(City::class);
    }
}
