<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transferencia;


class TransferenciaControler extends Controller
{

    public function __construct(){
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

    public function mostrarDataTable(Request $request)
    {
        $transferencia = Transferencia::mostrarDatatable($request);
        return response()->json($transferencia);
    }

    public function mostrar(Request $request)
    {
        $transferencia = Transferencia::generarConsulta($request->all());
        return response()->json($transferencia);
    }

    
    public function guardarTransferencia(Request $request)
    {

        /*  --------------------------------------------------------------------------------- */

        // GUARDAR TRANSFERENCIA Y ENVIAR UNO COMO REFERENCIA DE GUARDADO

        $transferencia = Transferencia::guardar_modificar($request->all(), 1);
        return response()->json($transferencia); 
        
        /*  --------------------------------------------------------------------------------- */
        
    }

    public function eliminarTransferencia(Request $request)
    {

        /*  --------------------------------------------------------------------------------- */

        // ELIMINAR TRANSFERENCIA

        $transferencia = Transferencia::eliminar($request->all(), 1);
        return response()->json($transferencia); 
        
        /*  --------------------------------------------------------------------------------- */
        
    }

    public function modificarTransferencia(Request $request)
    {

        /*  --------------------------------------------------------------------------------- */

        // MODIFICAR TRANSFERENCIA

        $transferencia = Transferencia::modificar($request->all());
        return response()->json($transferencia); 
        
        /*  --------------------------------------------------------------------------------- */
        
    }

    public function mostrarCabecera(Request $request)
    {

        /*  --------------------------------------------------------------------------------- */

        // MOSTRAR CABECERA DE TRANSFERENCIA 

        $transferencia = Transferencia::mostrar_cabecera($request->all());
        return response()->json($transferencia);

        /*  --------------------------------------------------------------------------------- */

    }

    public function mostrarCuerpo(Request $request)
    {

        /*  --------------------------------------------------------------------------------- */

        // MOSTRAR CABECERA DE TRANSFERENCIA 

        $transferencia = Transferencia::mostrar_cuerpo($request->all());
        return response()->json($transferencia);

        /*  --------------------------------------------------------------------------------- */

    }
}
