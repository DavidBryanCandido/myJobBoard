<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
        'salary',
    ];

    public function companies()
    {
        return $this->belongsTo(Company::class);
    }

    public function job_applications()
    {
        return $this->hasMany(JobApplication::class);
    }
}
