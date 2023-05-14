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
        'type', 
        'salary', 
        'status', 
        'company_id',
    ];

    // job belongs to company
    public function companies()
    {
        return $this->belongsTo(Company::class);
    }

    // job can have my job applications 
    public function job_applications()
    {
        return $this->hasMany(JobApplication::class);
    }
}
