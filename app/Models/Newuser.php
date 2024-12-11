<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newuser extends Model
{
    protected $table = "newuser";
   protected $primaryKey = "id";
   protected  $fillable = ['name','email','image','description', ];
    use HasFactory;
}
