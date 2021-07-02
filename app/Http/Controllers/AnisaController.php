<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\news1;
use App\Models\news2;
use App\Models\news3;
use App\Models\news4;
use App\Models\news5;
use App\Models\news6;
use App\Models\news7;
use App\Models\news8;

class AnisaController extends Controller
{
    public function author()
    {
        return view('admin.authors');
    }

    public function news()
    {
        return view('admin.news');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        return view('profil');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function price()
    {
        return view('price');
    }

    public function violin()
    {
        $news = News::all();
        return view('violin', compact("news"));
    }

    public function piano()
    {
        $news1 = news1::all();
        return view('piano', compact("news1"));
    }

    public function gitar()
    {
        $news2 = news2::all();
        return view('gitar', compact("news2"));
    }

    public function drum()
    {
        $news3 = news3::all();
        return view('drum', compact("news3"));
    }

    public function terompet()
    {
        $news4 = news4::all();
        return view('terompet', compact("news4"));
    }

    public function flute()
    {
        $news5 = news5::all();
        return view('flute', compact("news5"));
    }

    public function kontrabass()
    {
        $news6 = news6::all();
        return view('kontrabass', compact("news6"));
    }

    public function harpa()
    {
        $news7 = news7::all();
        return view('harpa', compact("news7"));
    }

    public function service()
    {
        return view('service');
    }
}
