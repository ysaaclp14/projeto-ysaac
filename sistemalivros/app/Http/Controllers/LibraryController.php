<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Book;

class LibraryController extends Controller
{
    public function index (Request $request) {
        // dd($request->all());

        Validator::make($request->all(),[
            'autor' => ['required','string'],
            'titulo' => ['required','string'],
            'subtitulo' => ['required','string'],
            'edicao' => ['required','string'],
            'editora' => ['required','string'],
            'ano_publicacao' => ['required','integer'],
        ])->validate();

        Book::create($request->only([
            'autor',
            'titulo',
            'subtitulo',
            'edicao',
            'editora',
            'ano_publicacao',
        ]));
        
        return redirect('livros/cadastro/');
    }
    public function create (Request $request){
        $books = Book::all();
        return view('books', ['books' => $books]);
    }

    public function edit(Request $request) {
        //
    }

    public function update(Request $request) {
        //
    }

    public function delete(Request $request) {
        //
    }
}
