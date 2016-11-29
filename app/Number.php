<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    //
    protected $fillable = [
        'title', 'description', 'phone_number',
        ];
}
