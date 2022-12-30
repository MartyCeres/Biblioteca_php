<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lettore extends Model
{
    use HasFactory;

    protected $table = 'lettori';

    protected $fillable = [
        'nome',
        'cognome',
        'citta',
        'data_nascita',
        'email'
    ];
}
