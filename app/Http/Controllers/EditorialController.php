<?php

namespace App\Http\Controllers;
use App\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    //
    //
        public function index(){

            $editorials = Editorial::all();
            return view('editorials.index',[
            'editorials'=> $editorials
            ]);
    
    
        }
        public function create()
        {
            return view('editorials.add');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            Editorial::create([
                'nombre'=>$request->nombre,
            ]);
            return ('Editorial agregada exitosamente');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $editorials = Editorial::find($id);

            return $editorials;
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $editorials = Editorial::findOrFaild($id);
            return view('/editorial');
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */

        // public function delete(Editorial $editorials){
        //     $editorials->delete();
        //     return redirect('/editorial')->with('mesageDelete', 'la editorial se ha eliminado exitosamente!');

        // }

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
        public function destroy(Editorial $editorials)
        {
            $editorials->destroy();   
            return redirect('/editorial')->with('mesageDestroy', 'La editorial se ha eliminado exitosamente!');
        }
}
