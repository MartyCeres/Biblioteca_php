<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestito extends Model
{
    use HasFactory;

    protected $table = 'prestiti';

    protected $fillable = [
        'libro_id',
        'lettore_id'
    ];
}
