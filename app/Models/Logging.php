<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logging extends Model
{
    use HasFactory;
    protected $table = 'LOG_PROD';

    protected $fillable = [
        'DC CODE LINE 2',
        'PART NO LINE 2',
        'DC CODE LINE 3',
        'PART NO LINE 3',
        'DC CODE LINE 4',
        'PART NO LINE 4',
    ];
}