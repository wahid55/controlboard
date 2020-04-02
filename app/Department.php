<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name', 'established_at'];

    public function courses() {
        return $this->belongsToMany('App\Course')->withTimestamps();
    }
}
