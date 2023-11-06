<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class JobTitle extends Model
{
    use HasFactory;
    public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class);
    }

    public function jobTitles()
    {
        return $this->hasMany(Employee::class);
    }
    
}
