<?php

namespace Database\Seeders;

use App\Http\Controllers\EditoreController;
use DB;
use App\Models\Autore;
use App\Models\Editore;
use App\Models\Posizione;
use Illuminate\Database\Seeder;

class LibroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("libri")->insert([

            'titolo'=> 'Harry Potter e la pietra filosofale',
            'autore_id' => Autore::where('cognome', 'Rowling')->value('id'),
            'editore_id'=> Editore::where('nome', 'Salani')->value('id'),
            'anno' => '1997',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','3')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Harry Potter e la camera dei segreti',
            'autore_id' => Autore::where('cognome', 'Rowling')->value('id'),
            'editore_id'=> Editore::where('nome', 'Salani')->value('id'),
            'anno' => '1998',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','3')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Harry Potter e il prigioniero di azkaban',
            'autore_id' => Autore::where('cognome', 'Rowling')->value('id'),
            'editore_id'=> Editore::where('nome', 'Salani')->value('id'),
            'anno' => '1999',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','3')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Harry Potter e il calice di fuoco',
            'autore_id' => Autore::where('cognome', 'Rowling')->value('id'),
            'editore_id'=> Editore::where('nome', 'Salani')->value('id'),
            'anno' => '2000',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','3')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Harry Potter e l\'ordine della fenice',
            'autore_id' => Autore::where('cognome', 'Rowling')->value('id'),
            'editore_id'=> Editore::where('nome', 'Salani')->value('id'),
            'anno' => '2003',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','3')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Harry Potter e il principe mezzosangue',
            'autore_id' => Autore::where('cognome', 'Rowling')->value('id'),
            'editore_id'=> Editore::where('nome', 'Salani')->value('id'),
            'anno' => '2005',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','3')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Harry Potter e i doni della morte',
            'autore_id' => Autore::where('cognome', 'Rowling')->value('id'),
            'editore_id'=> Editore::where('nome', 'Salani')->value('id'),
            'anno' => '2007',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','3')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Divina Commedia',
            'autore_id' => Autore::where('cognome', 'Alighieri')->value('id'),
            'editore_id'=> Editore::where('nome', 'Zanichelli')->value('id'),
            'anno' => '1975',
            'genere'=> 'Poema',
            'posizione_id' => Posizione::where('zona', 'B')->where('scaffale','1')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'La Compagnia dell\'Anello',
            'autore_id' => Autore::where('cognome', 'Tolkien')->value('id'),
            'editore_id'=> Editore::where('nome', 'Bompiani')->value('id'),
            'anno' => '1967',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','4')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Le due torri',
            'autore_id' => Autore::where('cognome', 'Tolkien')->value('id'),
            'editore_id'=> Editore::where('nome', 'Bompiani')->value('id'),
            'anno' => '1970',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','4')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Il ritorno del re',
            'autore_id' => Autore::where('cognome', 'Tolkien')->value('id'),
            'editore_id'=> Editore::where('nome', 'Bompiani')->value('id'),
            'anno' => '1970',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','4')->value('id')
        ]);
    }
}
