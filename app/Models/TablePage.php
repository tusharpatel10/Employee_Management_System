<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TablePage extends Model
{

    protected $fillable = [
        'PageType',
        'PageTitle',
        'PageDecription',
        'Email',
        'MobileNumber',
        'UpdationDate',
        'Timing'
    ];
}
