<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view("clients.index", compact("clients"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("clients.createClient");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|max:255|email|unique:clients',
            'phone' => 'required|max:255',            
        ]);
        Client::create($validatedData);
        return redirect()->route("clients.index")->with('success',"Client crée avec succès");
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $client_valid = $request->validate([
            'name' => 'required|string|min:3|max:40',
            'email' => 'required|string|email|max:255|unique:clients,email,'.$id,
            'phone'=> 'required|string|max:20'
        ]);

        $client = Client::findOrFail($id);
        $client->update($client_valid);
        return redirect()->route('clients.index')->with('success','Client est bien mis à jour!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect()->route('clients.index')->with('success_del','Client bie supprimé!');
    }
}
