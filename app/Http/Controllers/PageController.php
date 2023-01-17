<?php

namespace App\Http\Controllers;

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
        return view('/pages/lettori');
    }
    public function getPrestitiPage() {
        return view('/pages/prestiti');
    }
}
