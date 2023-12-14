<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test2 extends Model

{
    use HasFactory;
    Protected $fillable = ['number1','number2','text'];
    protected $table ="test2";
   
}
