<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendiz;
use Barryvdh\DomPDF\Facade as PDF;

class AprendizController extends Controller
{

    function __construct(){

        $this->middleware('permission:ver-aprendiz|editar-aprendiz',['only'=>['index']]);
        $this->middleware('permission:editar-aprendiz',['only'=>['edit','update']]);

    }









    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aprendiz_index = Aprendiz::paginate(5);
       return view('aprendiz.index', compact('aprendiz_index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $this->validate($request,[

            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'ficha' => 'required',
            'nombre_programa' => 'required',
            'instructor' => 'required',
            'nodo' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,svg|max:1024'
            
            
        ]);

        // Blog::create($request->all());
        // return redirect()->route('aprendiz.index');


        $aprendiz = $request->all();

         if($imagen = $request->file('imagen')) {
             $rutaGuardarImg = 'imagen/';
             $imagenInstructor = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
             $imagen->move($rutaGuardarImg, $imagenInstructor);
             $aprendiz['imagen'] = "$imagenInstructor";             
         }
         
         Instructor::create($aprendiz);
         return redirect()->route('aprendiz.index');


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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aprendiz $aprendiz)
    {
        return view('aprendiz.editar', compact('aprendiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aprendiz $aprendiz)
    {
        $this->validate($request,[

            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'ficha' => 'required',
            'nombre_programa' => 'required',
            'instructor' => 'required',
            'nodo' => 'required',
            
            
        ]);

    
        // $aprendiz->update($request->all());
        // return redirect()->route('aprendiz.index');


        $instruc = $request->all();
        if($imagen = $request->file('imagen')){
           $rutaGuardarImg = 'imagen/';
           $imageninstructor = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
           $imagen->move($rutaGuardarImg, $imageninstructor);
           $instruc['imagen'] = "$imageninstructor";
        }else{
            unset($instruc['imagen']);
         }
         $aprendiz->update($instruc);
        return redirect()->route('aprendiz.index');




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



    public function exportPDF()
    {

        $aprendiz_index = Aprendiz::all();

       view()->share('aprendiz.pdf',$aprendiz_index);

        $pdf = PDF::loadView('aprendiz.pdf', ['aprendiz_index' => $aprendiz_index]);

        return $pdf->download('ListAprendices.pdf');
    }




}
