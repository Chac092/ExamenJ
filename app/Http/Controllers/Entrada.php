<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use App\Models\Autor;
use Illuminate\Http\Request;

class Entrada extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function iniciar(){
        $libro = Libro::latest()->first();
        $autor = Autor::where('id', '=', $libro['autor'])->first();
        return view("entrada", ["libro"=> $libro,"autor"=>$autor]);
    }
    public function index(){
        $libro =$array=Libro::with("autores")->get();
        return view("index", ["libros"=> $libro]);
    }
    public function crear(){
        $autores = Autor::all();
        return view("crear", ["autores"=> $autores]);
    }
    public function insertarLibroDB(Request $request){
        $validado = $this->validate($request, [
            'titulo' => 'required|max:255',
            'autor' => 'required',
        ]); 
        
            $foto = $request->file('caratula');
            $nombreFoto = $foto->getClientOriginalName();
            $nuevoLibro = new Libro();
            $nuevoLibro->titulo = $request->input('titulo');
            $nuevoLibro->autor = $request->input('autor');
            $nuevoLibro->isbn = $request->input('isbn');
            $nuevoLibro->caratula = $nombreFoto;
            $nuevoLibro->save();
            $foto->move('FotosLibros/', $nombreFoto);
            return redirect()->route('index')->with('success','Manolo esta muerto');
        
        
    }
}
