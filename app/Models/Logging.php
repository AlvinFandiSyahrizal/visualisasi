<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logging extends Model
{
    use HasFactory;
    protected $table = 'LOG_PROD';

    protected $fillable = [
        'DCCODELINE2',
        'PARTNOLINE2',
        'DCCODELINE3',
        'PARTNOLINE3',
        'DCCODELINE4',
        'PARTNOLINE4',
    ];
}
