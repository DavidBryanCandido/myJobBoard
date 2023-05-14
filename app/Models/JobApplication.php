<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobApplication extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'message', 
        'resume', 
        'status', 
        'job_id', 
        'user_id',
    ];


    // jobApplication belong to the applicant user
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    // jobApplication belong to the job 
    public function jobs()
    {
        return $this->belongsTo(Job::class);
    }
}
