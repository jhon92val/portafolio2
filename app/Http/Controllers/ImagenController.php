<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Imagen;

class ImagenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($trabajo_id)
    {
        return view('imagenes.create')->with('trabajo_id',$trabajo_id);
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
            'imagen' => 'required|image|max:1999',
        ]);

        //OBTENER EL NOMBRE DEL ARCHIVO CON SU EXTENSION
        $filenameWithExt = $request->file('imagen')->getClientOriginalName();
        
        //SOLO OBTENER EL NOMBRE DEL ARCHIVO
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //SOLO OBTENER LA EXTENSION DEL ARCHIVO

        $extesion = $request->file('imagen')->getClientOriginalExtension();
            
        //CREAR NUEVO NOMBRE DE ARCHIVO

        $filenameToStore = $filename.'_'.time().'.'.$extesion;

        //Subir imagen al servidor
        $path = $request->file('imagen')->storeAs('public/images/imagenes/'.$request->input('trabajo_id'),$filenameToStore);

        //Crear nueva imagen 
        $imagen = New Imagen;
        $imagen->trabajo_id = $request->input('trabajo_id');
        //$imagen->titulo = $request->input('titulo');
        $imagen->size = $request->file('imagen')->getClientSize();
        //$imagen->descripcion = $request->input('descripcion');
        $imagen->imagen = $filenameToStore;

        $imagen->save();

        return redirect('/trabajos/'.$request->input('trabajo_id'))->with('success','GUARDADO CON EXITO!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imagen = Imagen::find($id);
        return view('imagenes.show')->with('imagen', $imagen);
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
       $imagen = Imagen::find($id);

       if(Storage::delete('public/images/imagenes/'.$imagen->trabajo_id.'/'.$imagen->imagen)){
            $imagen->delete();

            return redirect('/trabajos/'.$imagen->trabajo_id)->with('success','Imagen Eliminada');
       }
    }
}
