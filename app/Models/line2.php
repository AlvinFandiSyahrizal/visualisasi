<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class line2 extends Model
{
    use HasFactory;
    protected $table = 'dbflanges';

    protected $fillable = [
        'PartNumber',
        'FLANGENON',
        'LINE',
        'DC CODE',

    ];
}
