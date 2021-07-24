<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $casts = ["rating" =>"double"];
    public $fillable = ['name', 'phone', 'email', 'story', 'city', 'age', 'school'];
}
