<?php
namespace App\Http\Controllers;

use App\Models\Provider; // Asegúrate de que el nombre del modelo sea correcto
use Illuminate\Http\Request;


class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $providers = Provider::all();
        return response()->json($providers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'provider_nit' => 'required|integer',
            'provider_name' => 'required|string|max:255',
            'provider_service' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'municipality' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:255',
        ]);

        $provider = Provider::create($request->all());
        return response()->json($provider, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Provider $provider)
    {
        return response()->json($provider);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Provider $provider)
    {
        $request->validate([
            'address' => 'sometimes|required|string|max:255',
            'provider_nit' => 'sometimes|required|integer',
            'provider_name' => 'sometimes|required|string|max:255',
            'provider_service' => 'sometimes|required|string|max:255',
            'department' => 'sometimes|required|string|max:255',
            'municipality' => 'sometimes|required|string|max:255',
            'descripcion' => 'sometimes|nullable|string|max:255',
        ]);

        $provider->update($request->all());
        return response()->json($provider);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provider $provider)
    {
        $provider->delete();
        return response()->json(null, 204);
    }
}
