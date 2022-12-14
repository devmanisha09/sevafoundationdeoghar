<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    protected $fillable = ['phone', 'subject', 'address', 'dob'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attendances(){
        return $this->hasMany(Attendance::class);
    }
}
