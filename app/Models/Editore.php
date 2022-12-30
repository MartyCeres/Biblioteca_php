<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editore extends Model
{
    use HasFactory;

    protected $table = 'editori';

    protected $fillable = [
        'nome',
        'citta'
    ];
}
