<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
protected $table = 'artists';
protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'image', 'addsong'];
    use HasFactory;

}
