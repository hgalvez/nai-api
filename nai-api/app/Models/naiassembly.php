<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class naiassembly extends Model
{
    use HasFactory;

    protected $table = 'naiassembly';
    protected $fillable = [
        'serialnumber',
        'partnumber',
	'fibertype',
        'descrip',
        'connector',
        'il_limit',
        'rl_limit',
        'wavelength',
        'creatorid',
        'creationdate',
        'testerid',
	'line',
	'packingdt'
    ];

}
