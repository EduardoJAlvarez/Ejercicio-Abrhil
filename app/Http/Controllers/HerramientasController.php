<?php

namespace App\Http\Controllers;

use App\herramientas;
use App\vender;
use Illuminate\Http\Request;

class HerramientasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*Utilizaremos la funcion index para mostrar el GRID de los productos que el administrador de la empresa actulizará*/ 
    public function index()
    {
        //
        $datos['ventas']=vender::paginate(10);
        return view('herramientas.index',$datos);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*La función create, nos servirá para ver la ventana que nos siver para agregar un nuevo producto para el cliente pueda verlo*/
    public function create()
    {
        //
        return view('herramientas.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     /*En store insertaremos los valores obtenidos en la BD*/
    public function store(Request $request)
    {
        $datosherramientas=request()->except('_token');
        vender::insert($datosherramientas);
        return redirect('herramientas')->with('Mensaje', 'Registro agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\herramientas  $herramientas
     * @return \Illuminate\Http\Response
     */
    public function show(herramientas $herramientas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\herramientas  $herramientas
     * @return \Illuminate\Http\Response
     */

    /*La funcion edit la utilizaremos para mostrar los campos con los valores que le corresponden al registro*/

    public function edit($id)
    {
        $venta=vender::findOrFail($id);
        return view('herramientas.edit',compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\herramientas  $herramientas
     * @return \Illuminate\Http\Response
     */

    /*En update, interactuamos con BD para actualizar la información que se deseemos actualizar */

    public function update(Request $request, $id)
    {
        $datosherramientas=request()->except(['_token','_method']);
        vender::where('id','=',$id)->update($datosherramientas);
        return redirect('herramientas')->with('Mensaje','Registro modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\herramientas  $herramientas
     * @return \Illuminate\Http\Response
     */

    /*En destroy, interactuamos con BD para eliminar los registros no deseados */
    public function destroy( $id)
    {
        //
        vender::destroy($id);
        return redirect('herramientas')->with('Mensaje','Registro eliminado con éxito');
    }
}
