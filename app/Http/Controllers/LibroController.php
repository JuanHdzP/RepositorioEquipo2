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
            'libros'=> $libros
            ]);
    
    
        }
        public function create()
        {
            return view('libros.add');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
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
            return ('El Libro se dio de alta de manera correcta');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        $libro = Libro::find($id);

        return $libro;

        return view('libro.show',[
            '$libro' => $libro
        ]);
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //
            $libro = Libro::findOrFaild($id);
            return view('/libro');
        }

        public function delete(Libro $libro){
            $libro->delete();
            return redirect('/libro')->with('mesageDelete', 'El libro se ha eliminado exitosamente!');
    
    
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }
}
