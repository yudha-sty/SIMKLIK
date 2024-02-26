<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    use HasFactory;

    protected $table = 'msemployee'; 

    protected $fillable = [
        "name",
        "title",
        "isactive",
    ];
}
