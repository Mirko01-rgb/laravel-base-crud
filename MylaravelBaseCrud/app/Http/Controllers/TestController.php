<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ospite;

class TestController extends Controller
{
  public function home(){
    $ospiti = Ospite::all();
    //dd($ospiti);

    return view('pages.home', compact('ospiti'));
  }

  public function movie($id){
    dd($id);
  }

  public function ospite($id) {
    $ospite = Ospite::findOrFail($id);
     // dd($id);
    // dd($ospite);
    return view('pages.ospite', compact('ospite'));
  }

  public function create(){

    return view('pages.create');
  }

  public function store(Request $request) {
    //dd($request -> all());

    $validate = $request -> validate([
      'name' => 'nullable|max:255',
      'lastname' => 'nullable|max:255',
      'date_of_birth' => 'nullable|date',
      'document_type' => 'nullable|max:1024',
      'document_number' => 'nullable|max:1024',
    ]);

    $ospite = Ospite::create($validate);
    //dd($ospite);
    //return redirect() -> route('home');
    return redirect() -> route('ospite', $ospite -> id);
  }
}
