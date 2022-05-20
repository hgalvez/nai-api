<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultifiberResults extends Model
{
    use HasFactory;

    protected $table = 'MultifiberResults';
    protected $fillable = [
            'PartNumber',
            'SerialNumber',
            'LimitID',
            'ILResult_1',
            'ILResult_2',
            'BRResult_1',
            'BRResult_2',
            'SW1',
            'SW2',
            'WaveLength',
            'DT',
            'Tries',
            'Conn',
            'TesterID',
            'UserId',
            'RLA1',
            'RLB1',
            'RLA2',
            'RLB2'
    ];
    
}
