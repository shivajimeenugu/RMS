<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class llib extends Model
{
    use HasFactory;
    protected $fillable = ['lltid','ollid','lluid','llamt','llsts'];
}
