<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function admin()
    {

        return view('admin.home');
    }

    public function portal()
    {

        // ultimas 5 noticias 
        $ultimasNoticias = Noticia::orderBy('created_at', 'desc')
                          ->take(5)
                          ->get();

        return view('home', compact('ultimasNoticias'));
    }
}
