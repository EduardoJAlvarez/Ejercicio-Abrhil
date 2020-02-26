<?php

namespace App\Http\Controllers;
use App\vender;
use Illuminate\Http\Request;

class VenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*Utilizaremos la funcion index para mostrar un GRID en el cual se puedan hacer las compras */ 
    public function index()
    {
        $datos['ventas']=vender::paginate(50);
        return view('vender.index',$datos);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Esta función nos mostrará la view donde podemos agregar nuevas ventas
    public function create()
    {
        return view('vender.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     /*En store insertaremos los valores obtenidos y los insertamos en la BD*/
    public function store(Request $request)
    {
        $datosventas=request()->except('_token');
        vender::insert($datosventas);
        return redirect('vender')->with('Mensaje', 'Registro agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vender  $vender
     * @return \Illuminate\Http\Response
     */
    public function show(vender $vender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vender  $vender
     * @return \Illuminate\Http\Response
     */

    /*La funcion edit la utilizaremos para mostrar los campos con los valores que le corresponden*/
    public function edit($id)
    {
        $venta=vender::findOrFail($id);
        return view('vender.edit',compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vender  $vender
     * @return \Illuminate\Http\Response
     */

   /*En update, interactuamos con BD para actualizar la información que se deseemos*/
    public function update(Request $request, $id)
    {
        $datosventas=request()->except(['_token','_method']);
        vender::where('id','=',$id)->update($datosventas);
        return redirect('vender/'.$id.'/edit ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vender  $vender
     * @return \Illuminate\Http\Response
     */

    /*En destroy, interactuamos con BD para eliminar los registros no deseados */
    public function destroy($id)
    {
        vender::destroy($id);
        return redirect('vender')->with('Mensaje','Registro eliminado con éxito');
    }
}
