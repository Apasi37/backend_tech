<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

use App\Models\Page;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = Page::orderBy("created_at","desc")->get();

        return response()->json($page);
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
            "conference_id" => "required|int",
            "name" => "required|string|max:255",
            "html" => "required|string",
        ]);

        $page = Page::create([
            "html" => $request->html,
            "conference_id" => $request->conference_id,
            "name" => $request->name,
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        return $page
        ? response()->json(["message" => "page created"], Response::HTTP_CREATED)
        : response()->json(["message" => "page not created"], Response::HTTP_FORBIDDEN);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $page = Page::find($id);

        if(!$page){
            return response()->json(["message" => "page not found"], Response::HTTP_NOT_FOUND);
        }

        return response()->json($page);
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
        $page = Page::find($id);

        if(!$page){
            return response()->json(["message" => "page not found"], Response::HTTP_NOT_FOUND);
        }

        $request->validate([
            "name" => "string|max:255",
            "html" => "string",
        ]);

        $page->update($request->only(['name','html']));

        return response()->json(["message" => "page was edited"], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = Page::find($id);

        if(! $page){
            return response()->json(["message" => "page not found"], Response::HTTP_NOT_FOUND);
        }

        $page->delete();

        return response()->json(["message" => "page was deleted"], Response::HTTP_OK);
    }
}
