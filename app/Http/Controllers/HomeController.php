<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){
        return view('home');
    }


    public function browse(){
        $contents = Content::all()->sortByDesc("created_at");

        $hero = Content::inRandomOrder()->first();

        $newContent = [
            'title' => 'Novidades',
            'list' => Content::orderBy('created_at', 'desc')->take(15)->get()
        ];

        $emAlta = [
            'title' => 'Em alta',
            'list' => Content::inRandomOrder()->take(15)->get()
        ];


        $keepWatching = [
            'title' => 'Continuar assistindo...',
            'list' => Content::inRandomOrder()->take(15)->get()
        ];




        return view('site.browse',[
            'active' => 'browse',
            'hero' => $hero,
            'contents' => $contents,
            'newContent' => $newContent,
            'emAlta' => $emAlta,
            'keepWatching' => $keepWatching

        ]);
    }


}
