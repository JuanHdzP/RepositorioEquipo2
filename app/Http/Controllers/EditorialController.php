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
            'editorials'=> $editorials,
            'pagname' => 'Editoriales'
            ]);
    
    
        }
    
        public function store(Request $request)
    {
        Editorial::create([
            'nombre'=>$request->nombre
        ]);
        return redirect('/editorial')->with('alertMesage', 'La editorial se creó exitosamente ');
    }

        public function show($id)
        {
            $editorials = Editorial::find($id);

            return $editorials;
        }
    
        public function update(Request $request, $id)
        {
            $editorial = Editorial::find($id);
            $editorial->fill($request->all());
            $editorial->save();
            return redirect('/editorial')->with('alertMesage', 'La editorial se ha actualizado exitosamente!');
        }
 
        public function delete(Editorial $editorial)
        {
            $editorial->delete();   
            return redirect('/editorial')->with('dangerMesage', 'La editorial se ha eliminado exitosamente!');
        }
}
