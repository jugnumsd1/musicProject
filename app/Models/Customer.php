<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primarykey = 'id';
    protected $fillable = ['name','email','password'];
    use HasFactory;
    public $timestamps = true; 
}
