<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tema;
use App\Editorial;
use App\Libro;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    public function index()
    {
        $users = User::count();
        $libros = Libro::count();
        $editoriales = Editorial::count();
        $temas = Tema::count();
        return view('index', [
            'users' => $users,
            'libros' => $libros,
            'editoriales' => $editoriales,
            'temas' => $temas,
            'pagname' => 'Tablero'
        ]);
    }
}
