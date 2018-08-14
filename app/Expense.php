<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expenses';

    protected $fillable = ['copmany_id','user_id','budget_id','approver_id','priority','price','outside','subject','description','file','status','comments'];

}
