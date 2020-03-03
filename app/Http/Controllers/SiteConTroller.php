<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteConTroller extends Controller
{
    public function index(){
        $fullname = "Pongsatorn Aranonphinit";
        $website = "frong@gmail.com";
        return view('about',[
            'fullname' => $fullname,
            'website' => $website
        ]);
    }
}
