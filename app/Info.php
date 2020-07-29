<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'f_name',
        's_name',
        'family_name',
        'uid',
    ];
}
