<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    Protected $table = 'budgets';

    Protected $fillable = ['user_id','copmany_id','category_id','period_id','item','unit','quantity','budget'];
}
