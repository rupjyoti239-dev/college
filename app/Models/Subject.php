<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['department_id', 'subject_name'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    
    public function faculties()
    {
        return $this->hasMany(Faculty::class);
    }
}