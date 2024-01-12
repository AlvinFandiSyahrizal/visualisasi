<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbflange2 extends Model
{
    use HasFactory;
    protected $table = 'dbflange2s';

    protected $fillable = [
        'PartNumber',
        'FLANGENON',
        'LINE',
        'DC COdE',

    ];
}
