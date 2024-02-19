<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; //Libreria importada

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persona = persona::all();
        return response()->json(['personas' => $persona], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatepersona = Validator::make(
            $request->all(),
            [
                'nombre' => 'required',
                'apellido' => 'required',
                'cedula' => 'required',
                'email' => 'required|email|unique:personas,email',
                'telefono' => 'required',
                'especialidad',
                'tipoid' => 'required',
            ],
            
        );
        
        if ($validatepersona->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Existen campos vacíos',
                'errors' => $validatepersona->errors()
            ], 401);
        }
        
        try {
            $persona = persona::create([
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'cedula' => $request->cedula,
                'email' => $request->email,
                'telefono' => $request->telefono,
                'especialidad' => $request->especialidad,
                'tipoid' => $request->tipoid,
            ]);
        
            return response()->json([
                'persona' => $persona,
                'message' => 'Persona creado correctamente',
            ], 201);
        } 
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error al crear Persona: ' . $e->getMessage()
            ], 500);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(persona $request)
    {
        //
    }
    public function medicosDisponibles(){
        // Obtener todos los médicos que están disponibles
        $medicosDisponibles = persona::where('tipoid', 1)->get();

        // Devolver la lista de médicos disponibles en formato JSON
        return response()->json($medicosDisponibles);
    }
    
}
