<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posizione extends Model
{
    use HasFactory;

    protected $table = 'posizioni';

    protected $fillable = [
        'zona',
        'scaffale'
    ];
}
