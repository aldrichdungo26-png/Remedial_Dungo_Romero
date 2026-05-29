<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class employee extends Model
{   
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'employees';
    protected $fillable = ['fname',
    'mname',
    'lname',
    'add',
    'dobirth',
    'contact'];
}
