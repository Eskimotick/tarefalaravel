<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aulaController extends Controller
{
    public function add(Request $request) {
      //dd($request);
      $nome=$request->input('firstname');
      $sobrenome=$request->input('lastname');
    //  dd($nome, $sobrenome);
    //  return view('welcome');
    }

}
