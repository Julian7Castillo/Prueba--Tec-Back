<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = Tareas::all();
        return response()->json($tareas);
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
        $datos = $request->validate([
            'Descripcion' => 'required|string',
            'fecha' => 'required|date',
            'user_id' => 'nullable|exists:users,id',
            'estado' => 'required|string',
        ]);

        $tarea = Tareas::create($datos);
        return response()->json($tarea, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tarea = Tareas::findOrFail($id);
        return response()->json($tarea);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tarea = Tarea::findOrFail($id);

        $datos = $request->validate([
            'Descripcion' => 'required|string',
            'fecha' => 'required|date',
            'user_id' => 'nullable|exists:users,id',
            'estado' => 'required|string',
        ]);

        $tarea->update($datos);

        return response()->json($tarea);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();

        return response()->json(['message' => 'Tarea eliminada correctamente']);
    }
}
