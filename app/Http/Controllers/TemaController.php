<?php

namespace App\Http\Controllers;
use App\Tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }

    public function index(){

        $temas = Tema::latest()->paginate(20);
        return view('temas.index',[
        'temas'=> $temas
        ]);


    }
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tema::create([
            'nombre'=>$request->nombre
        ]);
        return redirect('/temas')->with('mesage', 'El tema se creó exitosa mente ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tema = Tema::find($id);

        return $tema;

        return view('tema.show',[
            '$tema' => $tema
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
        $tema = Tema::findOrFaild($id);
        return view('/tema');
    }

    public function delete(Tema $tema){
        
        $tema->delete();
        return redirect('/temas')->with('mesageDelete', 'El tema se ha eliminado exitosamente!');

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
