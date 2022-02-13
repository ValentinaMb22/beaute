<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;
class IndexController extends Controller
{
    public function index(){
        $salas = Sala::all();
    //return $salas;
      return view('dashboard',compact('salas'));
    }
}
