<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function  index(){
        return view('index');
    }
    public function  catg(){
        $cats=Categorie::get();
        
        return view('categorie')->with('catgs',$cats);
    }
  
}
