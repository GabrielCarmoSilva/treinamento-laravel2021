<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'hours', 'category_id'];

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function people() {
        return $this->belongsToMany('App\Person', 'person_courses');
    }
}
