<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class identitas extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
}
