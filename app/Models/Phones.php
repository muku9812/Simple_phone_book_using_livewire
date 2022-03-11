<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Phones extends Model
{
    use HasFactory;
    protected $table='phones';
    protected $fillable =['name','address','phone','email','gender'];
}
