<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class line4 extends Model
{
    use HasFactory;
    protected $table = 'dbflanges';

    protected $fillable = [
        'PARTNUMBER',
        'FLANGENON',
        'LINE',
        'DCCODE',

    ];
}
