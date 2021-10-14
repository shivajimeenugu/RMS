<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lib extends Model
{
    use HasFactory;
    protected $fillable = ['ltid','luid','lamt','lsts'];
    public $primaryKey='lid';
}
