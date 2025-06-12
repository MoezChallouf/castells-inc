<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recrutement extends Model
{
    use HasFactory;

     protected $fillable = ['name', 'email', 'phone', 'message', 'cv_path'];
}
