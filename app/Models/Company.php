<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'website',
        'logo',
        'created_by',
        'user_id',
    ];
    // company belong to a user
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    // company can have many job
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
