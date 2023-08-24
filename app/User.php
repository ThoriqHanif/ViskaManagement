<?php

namespace App;

use App\Models\BloodGroup;
use App\Models\GolDarah;
use App\Models\Lga;
use App\Models\Nationality;
use App\Models\Nilai;
use App\Models\StaffRecord;
use App\Models\State;
use App\Models\StudentRecord;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'phone', 'phone2', 'dob', 'gender', 'photo', 'address', 'gol_darah_id', 'password', 'code', 'user_type', 'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function student_record()
    {
        return $this->hasOne(StudentRecord::class);
    }

    public function blood_group()
    {
        return $this->belongsTo(GolDarah::class, 'gol_darah_id');
    }

    public function staff()
    {
        return $this->hasMany(StaffRecord::class);
    }
}
