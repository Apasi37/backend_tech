<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Conference;

class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conf = Conference::orderBy("created_at","desc")->get();

        return response()->json($conf);
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
    public function show(string $id)
    {
        $conf = Conference::with('page')->find($id);

        if(!$conf){
            return response()->json(["message" => "conference not found"], Response::HTTP_NOT_FOUND);
        }

        return response()->json($conf);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
