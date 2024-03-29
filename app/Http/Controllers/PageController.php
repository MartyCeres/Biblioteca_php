<?php

namespace App\Http\Controllers;

use App\Models\Lettore;
use App\Models\Libro;
use App\Models\Autore;
use App\Models\Editore;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHomePage() {
        return view('/pages/home');
    }
    public function getLibriPage(Request $request) {
        $libri = DB::table('libri')
            ->join('Autori', 'Autori.id', '=', 'libri.autore_id')
            ->join('editori', 'editori.id', '=', 'libri.editore_id')
            ->select('libri.*', 'Autori.nome as anome', 'Autori.cognome', 'editori.nome')
            ->get();
        return view('/pages/libri', compact('libri'));
    }
    public function getLettoriPage() {
        $lettori = Lettore::all();
        return view('/pages/lettori', compact('lettori'));
    }
    public function getPrestitiPage() {
        $prestiti = DB::table('prestiti')
            ->join('libri', 'libri.id', '=', 'prestiti.libro_id')
            ->join('lettori', 'lettori.id', '=', 'prestiti.lettore_id')
            ->select('prestiti.*', 'libri.titolo', 'lettori.cognome', 'lettori.nome')
            ->get();
        return view('/pages/prestiti',compact('prestiti'));
    }
    public function getProfiloPage(){
        return view('/pages/profilo');
    }
    public function getGestioneUtentiPage(){
        $users = User::all()->except('password');
        return view('/pages/gestioneUtenti', compact('users'));
    }
    public function getGestionePrestitiPage(){
        $prestiti = DB::table('prestiti')
        ->join('libri', 'libri.id', '=', 'prestiti.libro_id')
        ->join('lettori', 'lettori.id', '=', 'prestiti.lettore_id')
        ->select('prestiti.*', 'libri.titolo', 'lettori.cognome', 'lettori.nome')
        ->get();

        $libri = Libro::all();
        $lettori = Lettore::all('lettori.nome', 'lettori.cognome');
        return view('/pages/gestionePrestiti',compact(['prestiti', 'libri', 'lettori']));
    }
    public function getPosizioniLibriPage(Request $request) {
        $libri = DB::table('libri')
            ->join('Autori', 'Autori.id', '=', 'libri.autore_id')
            ->join('posizioni', 'posizioni.id', '=', 'libri.posizione_id')
            ->select('libri.*', 'Autori.nome as anome', 'Autori.cognome', 'posizioni.*')
            ->get();
        return view('/pages/posizioniLibri', compact('libri'));
    }
}
