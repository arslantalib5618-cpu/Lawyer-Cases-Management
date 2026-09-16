<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\LawCase;

class HomeController extends Controller
{
   public function home()
    {    $Home = LawCase::latest()->take(8)->get();
        return view('home', compact('Home'));
    }
public function aboutLawyer()
    {
        return view('aboutLawyer');
    }
    public function case()
    {   $cases=LawCase::all();
        return view('case', compact('cases'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function detail($id)
    {    $detail = LawCase::findOrFail($id);
        return view('detail' , compact('detail'));
    }



    
}
