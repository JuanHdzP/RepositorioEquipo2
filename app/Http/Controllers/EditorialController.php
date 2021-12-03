<?php

namespace App\Http\Controllers;
use App\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

        public function index(){

            $editorials = Editorial::latest()->paginate(20);
            return view('editorials.index',[
            'editorials'=> $editorials
            ]);
    
    
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
            'nombre'=>$request->nombre
        ]);
        return redirect('/editorial')->with('mesage', 'La editorial se creó exitosamente ');
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
        public function delete(Editorial $editorial)
        {
            $editorial->delete();   
            return redirect('/editorial')->with('mesageDelete', 'La editorial se ha eliminado exitosamente!');
        }
}
