<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="Index";
        return view('pages.index')->with('title',$title);
    }
    
    public function about(){
        $title="About Us";
        return view('pages.about',compact('title'));
    }
    
    public function services(){
        $data=array(
            "title"=>"Services",
            "services"=>["web design","programming","seo"]
        ); 
        return view('pages.services')->with($data);
    }

}