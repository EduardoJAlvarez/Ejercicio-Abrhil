<?php

namespace App\Http\Controllers;

use App\vendidos;
use App\vender;
use Illuminate\Http\Request;

class VendidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*Utilizaremos la funcion index para mostrar el GRID de los productos que el cliente ya ha comprado*/ 
    public function index()
    {
        $datos['ventas']=vender::paginate(10);
        return view('vendidos.index',$datos);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vendidos  $vendidos
     * @return \Illuminate\Http\Response
     */
    public function show(vendidos $vendidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vendidos  $vendidos
     * @return \Illuminate\Http\Response
     */
    public function edit(vendidos $vendidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vendidos  $vendidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vendidos $vendidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vendidos  $vendidos
     * @return \Illuminate\Http\Response
     */
    
     /*En destroy, interactuamos con BD para eliminar los registros no deseados */

    public function destroy(vendidos $vendidos)
    {
        //
    }
}
