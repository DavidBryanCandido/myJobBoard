<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'cover_letter',
        'resume',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function jobs()
    {
        return $this->belongsTo(Job::class);
    }
}
