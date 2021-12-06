<?php

namespace App\Http\Controllers;
use App\Libro;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
        public function index(){

            $libros = Libro::latest()->paginate(20);
            return view('libros.index',[
            'libros'=> $libros,
            'pagname' => 'Libros'
            ]);
        }

        public function create()
        {
            return view('libros.add');
        }

        public function store(Request $request)
        {
            Libro::create([
                'titulo'=>$request->titulo,
                'autor'=> $request->autor,
                'descripcion'=> $request->descripcion,
                'img'=> $request->img,
                'existencias'=> $request->existencias,
                'editorial_id'=> $request->editorial_id
            ]);
            return redirect('/libro')->with('alertMesage', 'El libro se ha agregado exitosamente!');
        }

        public function show($id)
        {
        $libro = Libro::find($id);

        return $libro;

        return view('libro.show',[
            '$libro' => $libro,
        ]);
        }

        public function delete(Libro $libro){
            $libro->delete();
            return redirect('/libro')->with('dangerMesage', 'El libro se ha eliminado exitosamente!');
    
    
        }

        public function update(Request $request, $id)
        {
            $libro = Libro::find($id);
            // $libro->fill($request->all());
            // $libro->save();
            $libro->update($request->all());

            return redirect('/libro')->with('alertMesage', 'El libro se ha actualizado exitosamente!');
            
        }

        public function destroy($id)
        {
            //
        }
}
