<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class LibraryController extends Controller
{
    public function index (Request $request) {
    
        Validator::make($request->all(),[
            'autor' => ['required','string'],
            'titulo' => ['required','string'],
            'subtitulo' => ['required','string'],
            'edicao' => ['required','string'],
            'editora' => ['required','string'],
            'ano_publicacao' => ['required','integer'],
        ])->validate();   
        
        $userid = Book::create([
            'user_id' => Auth::user()->id,
            'autor' => $request->autor,
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'edicao' => $request->edicao,
            'editora' => $request->editora,
            'ano_publicacao' => $request->ano_publicacao,
        ]);
        
        return redirect('livros');
    }
    public function create (Request $request){

        $books = Book::where('user_id', Auth::user()->id)->get();
        return view('books', ['books' => $books]);

    }

    public function edit($id) {

        $books = Book::where('id', $id)->first();
        if (!empty($books)) {
            return view('edit', ['books' => $books]);
        }
        else {
            return redirect()->route('books');
        }

    }
    public function update(Request $request, $id) {

        $data = [
            'autor' => $request->autor,
            'titulo' => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'edicao' => $request->edicao,
            'editora' => $request->editora,
            'ano_publicacao' => $request->ano_publicacao,
        ];
        Book::where('id', $id)->update($data);
        return redirect()->route('books');

    }

    public function destroy($id) {

        Book::where('id', $id)->delete();
        return redirect()->route('books');

    }
}
