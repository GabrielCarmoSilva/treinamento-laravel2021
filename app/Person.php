<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = [];

    protected $fillable = ['age', 'name', 'profession'];
}
