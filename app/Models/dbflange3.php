<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbflange3 extends Model
{
    use HasFactory;
    protected $table = 'dbflange3s';

    protected $fillable = [
        'PartNumber',
        'FLANGENON',
        'LINE',
        'DC COdE',

    ];
}
