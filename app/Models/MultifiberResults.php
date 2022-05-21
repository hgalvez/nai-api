<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultifiberResults extends Model
{
    use HasFactory;

    protected $table = 'MultifiberResults';
    protected $fillable = [
            'partnumber',
            'serialnumber',
            'limitid',
            'ilresult_1',
            'ilresult_2',
            'brresult_1',
            'brresult_2',
            'sw1',
            'sw2',
            'waveLength',
            'dt',
            'tries',
            'conn',
            'testerid',
            'userid',
            'rla1',
            'rlb1',
            'rla2',
            'rlb2'
    ];
    
}
