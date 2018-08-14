<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    Protected $table = 'periods';

    Protected $fillable = ['user_id', 'company_id', 'from', 'to'];
}
