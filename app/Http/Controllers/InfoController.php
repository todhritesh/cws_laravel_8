<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function details($name="-",$gender="-"){
        return view("profile",['name'=>$name,'gender'=>$gender]);
    }
}
