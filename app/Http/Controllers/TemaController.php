<?php

namespace App\Http\Controllers;
use App\Tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index(){

        $temas = Tema::latest()->paginate(20);
        return view('temas.index',[
        'temas'=> $temas,
        'pagname' => 'Temas'
        ]);


    }

    public function create()
    {
       //
    }

    public function store(Request $request)
    {
        Tema::create([
            'nombre'=>$request->nombre
        ]);
        return redirect('/tema')->with('alertMesage', 'El tema se creó exitosamente ');
    }

    public function show($id)
    {
        $tema = Tema::find($id);

        return $tema;

        return view('tema.show',[
            '$tema' => $tema
        ]);
    }

    public function delete(Tema $tema){
        
        $tema->delete();
        return redirect('/tema')->with('dangerMesage', 'El tema se ha eliminado exitosamente!');

    }

    public function update(Request $request, $id)
    {
        $tema = Tema::find($id);
        $tema->fill($request->all());
        $tema->save();
        return redirect('/tema')->with('alertMesage', 'El tema se ha actualizado exitosamente!');
    }

    public function destroy($id)
    {
        //
    }
}
