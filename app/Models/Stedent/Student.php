<?php

namespace App\Models\Stedent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    //protected $table = "students";
    protected $fillable = ['name', 'description'];
}
