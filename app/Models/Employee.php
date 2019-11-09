<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ['FirstName','LastName','Company_id','Email','Phone'];

    public function company()
    {
        return $this->belongsTo('App\Models\Company','Company_id');
    }
}
