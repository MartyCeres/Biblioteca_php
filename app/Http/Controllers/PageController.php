<?php

namespace App\Http\Controllers;

use App\Models\Lettore;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHomePage() {
        return view('/pages/home');
    }

    public function getLibriPage() {

        return view('/pages/libri');
    }
    public function getLettoriPage() {
        $lettori = Lettore::all();
        return view('/pages/lettori', compact('lettori'));
    }
    public function getPrestitiPage() {
        return view('/pages/prestiti');
    }
}
