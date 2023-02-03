<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Libro;
use App\Models\Lettore;
class Prestito extends Model
{
    use HasFactory;

    protected $table = 'prestiti';

    protected $fillable = [
        'libro_id',
        'lettore_id'
    ];

    public function hasLibro($libro){

        if($this->libro == $libro){
            return true;
        }
        return false;
    }

    public function hasLettore($lettore){

        if($this->lettore == $lettore){
            return true;
        }
        return false;
    }
}
