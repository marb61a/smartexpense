<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryZone extends Model
{
    Protected $table = 'country_zones';

    Protected $fillable = ['code', 'name'];

    public function zones(){
    	$country_id = Input::get('id');

    	return CountryZone::where('country_id', $country_id)->get();
    }
}
