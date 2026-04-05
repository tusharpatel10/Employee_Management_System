<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableEmployee extends Model
{
    use HasFactory;

    protected  $table = "table_employees";

    protected $fillable = [
        'id',
        'DepartmentID',
        'EmpId',
        'EmpName',
        'EmpEmail',
        'Gender',
        'EmpContactNumber',
        'Designation',
        'EmpDateOfBirth',
        'EmpAddress',
        'EmpDateofjoining',
        'Description',
        'Password',
        'ProfilePic',
        'qrcode'
    ];
}
