<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    Protected $table = 'countries';

    Protected $fillable = ['name'];
}
