<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ficha;
class FichaController extends Controller
{

    function __construct(){

        $this->middleware('permission:ver-ficha|crear-ficha|editar-ficha|borrar-ficha',['only'=>['index']]);
        $this->middleware('permission:crear-ficha',['only'=>['create','store']]);
        $this->middleware('permission:editar-ficha',['only'=>['edit','update']]);
        $this->middleware('permission:borrar-ficha',['only'=>['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ficha_index = ficha::paginate(5);
        return view('ficha.index', compact('ficha_index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ficha.crear');
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

            'numero' => 'required',
            'nombre_programa' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            
            
        ]);

        Ficha::create($request->all());
        return redirect()->route('ficha.index');
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
    public function edit(Ficha $ficha)
    {
        return view('ficha.editar', compact('ficha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ficha $ficha )
    {
        
        $this->validate($request,[

            'numero' => 'required',
            'nombre_programa' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
            
            
        ]);

        $ficha->update($request->all());
        return redirect()->route('ficha.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ficha $ficha)
    {
        $ficha->delete();
        return redirect()->route('ficha.index');
    }
}
