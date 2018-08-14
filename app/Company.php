<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    Protected $table = 'companies';

    Protected $fillable = ['user_id', 'name'];
}
