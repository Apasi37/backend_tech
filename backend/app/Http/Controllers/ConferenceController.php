<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
        $request->validate([
            "name" => "required|string|max:255",
        ]);

        $conference = Conference::create([
            "name" => $request->name,
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        return $conference
        ? response()->json(["message" => "conference created"], Response::HTTP_CREATED)
        : response()->json(["message" => "conference not created"], Response::HTTP_FORBIDDEN);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $conf = Conference::with('page','user')->find($id);

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
        $conference = Conference::find($id);

        if(!$conference){
            return response()->json(["message" => "conference not found"], Response::HTTP_NOT_FOUND);
        }

        $request->validate([
            "name" => "string|max:255",
        ]);

        $conference->update($request->only(['name']));

        return response()->json(["message" => "conference was edited"], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $conf = Conference::find($id);

        if(! $conf){
            return response()->json(["message" => "Conference not found"], Response::HTTP_NOT_FOUND);
        }

        $conf->delete();

        return response()->json(["message" => "Conference was deleted"], Response::HTTP_OK);
    }
}
