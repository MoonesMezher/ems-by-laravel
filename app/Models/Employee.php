<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['first_name', 'last_name', 'email', 'department_id', 'postion'];

    public function getFullNameAttribute() {
        return ucfirst($this->first_name).' '.ucfirst($this->last_name);
    }

    public function setFullNameAttribute($value) {
        $this->attributes['first_name'] = ucfirst($value);
    }

    public function projects() {
        return $this->hasMany(Project::class, 'employee_project');
    }

    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function notes() {
        return $this->morphMany(Note::class, 'noteable');
    }
}
