<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultifiberResults extends Model
{
    use HasFactory;

    protected $table = 'multifiberresults';
    protected $fillable = [
            'partnumber',
            'serialnumber',
            'limitid',
            'il1310',
            'il1550',
            'rl1310in',
            'rl1310out',
            'rl1550in',
            'rl1550out',
            'dt',
            'conn',
            'testerid',
            'userid',

    ];

}
