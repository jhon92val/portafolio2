<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabajo;
use Dotenv\Regex\Success;
use Image;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $trabajos = Trabajo::with('Imagenes')->get();
        return view('admin')->with('trabajos' , $trabajos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trabajos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            //'titulo' => 'required|max:255' ,
            //'fecha' => 'date',
           // 'descripcion' => 'required|max:500',
            'portada' => 'required|image|max:1999',
        ]);

        //OBTENER EL NOMBRE DEL ARCHIVO CON SU EXTENSION
        $filenameWithExt = $request->file('portada')->getClientOriginalName();
        
        //SOLO OBTENER EL NOMBRE DEL ARCHIVO
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //SOLO OBTENER LA EXTENSION DEL ARCHIVO

        $extesion = $request->file('portada')->getClientOriginalExtension();
            
        //CREAR NUEVO NOMBRE DE ARCHIVO

        $filenameToStore = $filename.'_'.time().'.'.$extesion;

        //Subir imagen al servidor
        $path = $request->file('portada')->storeAs('public/images/trabajos',$filenameToStore);

        //Crear nuevo trabajo
        $trabajo = New Trabajo;
        $trabajo->titulo = $request->input('titulo');
        $trabajo->fecha = $request->input('fecha');
        $trabajo->descripcion = $request->input('descripcion');
        $trabajo->portada = $filenameToStore;

        $trabajo->save();

        return redirect('/trabajos/crear')->with('success','GUARDADO CON EXITO!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $trabajo = Trabajo::with('Imagenes')->find($id);
         return view('trabajos.show')->with('trabajo',$trabajo);
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
        return view('trabajos.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     
    public function destroy($id)
    {
        return view('trabajos.delete');
    }

    
}
