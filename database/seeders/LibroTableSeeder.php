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

        DB::table("libri")->insert([

            'titolo'=> 'Twilight',
            'autore_id' => Autore::where('cognome', 'Meyer')->value('id'),
            'editore_id'=> Editore::where('nome', 'Fazi')->value('id'),
            'anno' => '2005',
            'genere'=> 'Romantico',
            'posizione_id' => Posizione::where('zona', 'C')->where('scaffale','1')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'New Moon',
            'autore_id' => Autore::where('cognome', 'Meyer')->value('id'),
            'editore_id'=> Editore::where('nome', 'Fazi')->value('id'),
            'anno' => '2006',
            'genere'=> 'Romantico',
            'posizione_id' => Posizione::where('zona', 'C')->where('scaffale','1')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Eclipse',
            'autore_id' => Autore::where('cognome', 'Meyer')->value('id'),
            'editore_id'=> Editore::where('nome', 'Fazi')->value('id'),
            'anno' => '2007',
            'genere'=> 'Romantico',
            'posizione_id' => Posizione::where('zona', 'C')->where('scaffale','1')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Breaking Dawn',
            'autore_id' => Autore::where('cognome', 'Meyer')->value('id'),
            'editore_id'=> Editore::where('nome', 'Fazi')->value('id'),
            'anno' => '2008',
            'genere'=> 'Romantico',
            'posizione_id' => Posizione::where('zona', 'C')->where('scaffale','1')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Il leone, la strega e l\'armadio ',
            'autore_id' => Autore::where('cognome', 'Lewis')->value('id'),
            'editore_id'=> Editore::where('nome', 'Mondadori')->value('id'),
            'anno' => '1950',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','2')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Il principe Caspian',
            'autore_id' => Autore::where('cognome', 'Lewis')->value('id'),
            'editore_id'=> Editore::where('nome', 'Mondadori')->value('id'),
            'anno' => '1951',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','2')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Il viaggio del veliero',
            'autore_id' => Autore::where('cognome', 'Lewis')->value('id'),
            'editore_id'=> Editore::where('nome', 'Mondadori')->value('id'),
            'anno' => '1952',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','2')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'La sedia d\'argento',
            'autore_id' => Autore::where('cognome', 'Lewis')->value('id'),
            'editore_id'=> Editore::where('nome', 'Mondadori')->value('id'),
            'anno' => '1953',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','2')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Il cavallo e il ragazzo ',
            'autore_id' => Autore::where('cognome', 'Lewis')->value('id'),
            'editore_id'=> Editore::where('nome', 'Mondadori')->value('id'),
            'anno' => '1954',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','2')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'Il nipote del mago',
            'autore_id' => Autore::where('cognome', 'Lewis')->value('id'),
            'editore_id'=> Editore::where('nome', 'Mondadori')->value('id'),
            'anno' => '1955',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','2')->value('id')
        ]);

        DB::table("libri")->insert([

            'titolo'=> 'L\'ultima battaglia',
            'autore_id' => Autore::where('cognome', 'Lewis')->value('id'),
            'editore_id'=> Editore::where('nome', 'Mondadori')->value('id'),
            'anno' => '1956',
            'genere'=> 'Fantasy',
            'posizione_id' => Posizione::where('zona', 'A')->where('scaffale','2')->value('id')
        ]);


    }
}
