<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

use Illuminate\Support\Facades\Redirect;


use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Note;

class NotesController extends Controller
{
    public function index()
    {
        // $notes = \App\Note::all(); //Carga en la variable $notes todas las notas.
        // $notes = Note::all(); //Ya importé el namespace arriba con use App\Note;

        $notes = Note::paginate(20);
        //dd($notes); //Funcion helper de Laravel
        return view('notes/notes', compact('notes'));
    }

    public function create()
    {
         return view('notes/create');
        
        // return [
        //     'notes' => 'create'
        // ];
    }

    public function store( /*Request $miVar*/ )
    {
        // return 'Creating a note';
        // return request()->all(); //Retorna un json con todos los valores enviados en un formulario
        // return request()->get('note'); //Retorna un texto con el valor de la variable indicada
        //return request()->only(['note']); //Retorna un json con los valores indicados.
        
        // return $miVar->all();
         
        // return Request::only(['note']);
         

        $this->validate( request() , [
            'note' => ['required', 'max:200']
            ]);

        $data = request()->all();

        Note::create($data);

        // return Redirect::to('notes');
        return redirect()->to('notes');
    }

    public function show($num = 5)
    {
        return "<h2>".dd($num). "</h2>";
    }

    public function newNote()
    {
        // return '[create notes]';
        return view('notes/newNote');
    }

    public function changeLang($lang)
    {
        session(['lang' => $lang]);
        // return redirect()->back();
        return Redirect::back();
    }

    public function edad()
    {
        return "Eres mayor de edad! Puedes ver el video";
    }
}
