<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $fillable = ['name', 'class_type_id', 'mark_from', 'mark_to', 'remark'];
}
