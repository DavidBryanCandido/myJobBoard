<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDashboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_application_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function job_applications()
    {
        return $this->belongsTo(JobApplication::class);
    }
}
