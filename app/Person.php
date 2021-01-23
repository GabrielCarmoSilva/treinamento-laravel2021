<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = [];

    protected $fillable = ['age', 'name', 'profession'];

    public function courses() {
        return $this->belongsToMany('App\Course', 'person_courses');
    }
}
