<?php

namespace App\Http\Controllers;

use App\devueltos;
use Illuminate\Http\Request;

class DevueltosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*Utilizaremos la funcion index para mostrar el GRID de los productos que se han devuelto */ 
    public function index()
    {
        $datos['devueltos']=devueltos::paginate(50);
        return view('devueltos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*La función create, nos servirá para crear un nuevo registro de un producto devuelto */
    public function create()
    {
        return view('devueltos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     /*En store insertaremos los valores obtenidos*/
    public function store(Request $request)
    {
        $datosdevueltos=request()->except('_token');
        devueltos::insert($datosdevueltos);
        return redirect('devueltos')->with('Mensaje', 'Registro agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\devueltos  $devueltos
     * @return \Illuminate\Http\Response
     */

    public function show(devueltos $devueltos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\devueltos  $devueltos
     * @return \Illuminate\Http\Response
     */
    /*La funcion edit la utilizaremos para mostrar los campos con los valores que le corresponden*/
    public function edit($id)
    {
        $devuelto=devueltos::findOrFail($id);
        return view('devueltos.edit',compact('devuelto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\devueltos  $devueltos
     * @return \Illuminate\Http\Response
     */

    /*En update, interactuamos con BD para actualizar la información que se deseemos actualizar */
    public function update(Request $request, $id)
    {
        $datosdevueltos=request()->except(['_token','_method']);
        devueltos::where('id','=',$id)->update($datosdevueltos);
        return redirect('devueltos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\devueltos  $devueltos
     * @return \Illuminate\Http\Response
     */
    
     /*En destroy, interactuamos con BD para eliminar los registros no deseados */
    public function destroy($id)
    {
        devueltos::destroy($id);
        return redirect('devueltos')->with('Mensaje','Registro eliminado con éxito');
    }
}
