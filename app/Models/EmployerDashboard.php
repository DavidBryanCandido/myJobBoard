<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployerDashboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function companies()
    {
        return $this->belongsTo(Company::class);
    }
}
