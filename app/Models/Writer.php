<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    protected $table = 'writers';  // Specify the table name
    protected $primaryKey = 'id';  // Specify the primary key field (optional if it's 'id')
    protected $fillable = ['name', 'email', 'image', 'date', 'description']; // Add your fillable fields
}
