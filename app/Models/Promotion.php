<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = ['from_class', 'to_class', 'grad', 'student_id', 'from_session', 'to_session', 'status'];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function fc()
    {
        return $this->belongsTo(MyClass::class, 'from_class');
    }

    public function tc()
    {
        return $this->belongsTo(MyClass::class, 'to_class');
    }
}
