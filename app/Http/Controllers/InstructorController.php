<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;

// exel 

use App\Models\Aprendiz;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AprendizImport;

class InstructorController extends Controller
{

    function __construct(){

        $this->middleware('permission:ver-instructor|crear-instructor|editar-instructor|borrar-instructor',['only'=>['index']]);
        $this->middleware('permission:crear-instructor',['only'=>['create','store']]);
        $this->middleware('permission:editar-instructor',['only'=>['edit','update']]);
        $this->middleware('permission:borrar-instructor',['only'=>['destroy']]);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructor_index = Instructor::paginate(5);
       return view('instructor.index', compact('instructor_index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instructor.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'nombre_curso' => 'required',
            'ficha_curso' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,svg|max:1024'
        ]);

         $instructor = $request->all();

         if($imagen = $request->file('imagen')) {
             $rutaGuardarImg = 'imagen/';
             $imagenInstructor = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
             $imagen->move($rutaGuardarImg, $imagenInstructor);
             $instructor['imagen'] = "$imagenInstructor";             
         }
         
         Instructor::create($instructor);
         return redirect()->route('instructor.index');
    

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
    public function edit(Instructor $instructor)
    {
        return view('instructor.editar', compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructor $instructor)
    {
        
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'nombre_curso' => 'required',
            'ficha_curso' => 'required',

        ]);
        $instruc = $request->all();
        if($imagen = $request->file('imagen')){
           $rutaGuardarImg = 'imagen/';
           $imageninstructor = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
           $imagen->move($rutaGuardarImg, $imageninstructor);
           $instruc['imagen'] = "$imageninstructor";
        }else{
            unset($instruc['imagen']);
         }
         $instructor->update($instruc);
        return redirect()->route('instructor.index');



        
        
        



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {
        $instructor->delete();
        return redirect()->route('instructor.index');
    }






    // excel 
    

    public function importData(Request $request)
    {

        Excel::import(new AprendizImport, request()->file('excel'));
        return redirect()->route('instructor.index');



        
    }



}
