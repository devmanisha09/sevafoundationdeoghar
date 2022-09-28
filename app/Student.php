<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, int $int)
 */
class Student extends Model
{
    protected $fillable = [
        'class_id' ,'roll_number', 'phone', 'age', 'gender', 'date_of_birth', 'address', 'session', 'division'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function class()
    {
        return $this->belongsTo(AllClass::class);
    }

    public function parent()
    {
        return $this->belongsTo(AllParent::class);
    }

    public function attendances(){
        return $this->hasMany(Attendance::class);
    }
}
