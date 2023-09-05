<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;
    protected $table="qualification";
    protected $fillable=['id', 'user_id', 'passed_year', 'education_institution','gpa'];
}

