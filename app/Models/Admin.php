<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use Notifiable;

    protected $table = 'table_admin';
    protected $primaryKey = 'id';

    protected $fillable = [
        'AdminName',
        'UserName',
        'MobileNumber',
        'Email',
        'AdminRegDate'
    ];

    protected $hidden = [
        'Password',
        'remember_token'
    ];
}
