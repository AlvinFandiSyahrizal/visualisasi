<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbflange1 extends Model
{
    use HasFactory;
    protected $table = 'dbflange1s';

    protected $fillable = [
        'PARTNUMBER',
        'FLANGENON',
        'LINE',
        'DCCODE',
        'created_at',
        'updated_at'
    ];
}
