<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    use HasFactory;

    protected $table="Course_detail";
    protected $fillable=['id', 'collegeid', 'coursetype', 'description'];
}
