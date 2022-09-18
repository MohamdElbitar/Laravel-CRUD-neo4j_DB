<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use NeoEloquent;


class Student extends NeoEloquent
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['name', 'address', 'mobile'];
}
