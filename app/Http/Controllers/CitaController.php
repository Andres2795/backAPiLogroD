<?php

namespace App\Http\Controllers;

use App\Models\cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; //Libreria importada

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cita $cita)
    {
        //
    }
    public function reservarCita(Request $request){
        // Validar los datos de la solicitud
        $validate =validator::make($request->all(),[
            'personaid'=>'required',
            'medico'=>'required',
            'fechaCita'=>'required',
        ]);
        if($validate -> fails()){
            return response()->json([
                'satatus'=>false,
                'message'=>'campos vacios',
                'errors'=>$validate->errors()

            ],401);
        }
        $registro =cita::create([
            'personaid'=>$request->personaid,
            'medico'=>$request->medico,
            'fechaCita'=>$request->fechaCita

        ]);
    }

    public function mostrarCitas(Request $request)
    {
        // Recuperar las citas según sea necesario (por ejemplo, filtrar por paciente, médico, fecha, etc.)
        $citas = cita::all();

        // Devolver las citas como respuesta (puedes ajustar esto según tus necesidades)
        return response()->json(['citas'=>$citas],200);
    }
}
