<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy("created_at","desc")->get();

        return response()->json($users);
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
            "role" => "required|string|max:255",
            "name" => "required|string|max:255",
            "email" => "required|string|unique:users|max:255",
            "password" => "required|string|max:255",
        ]);

        $user = User::create([
            "role" => $request->role,
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        return $user
        ? response()->json(["message" => "user created"], Response::HTTP_CREATED)
        : response()->json(["message" => "user not created"], Response::HTTP_FORBIDDEN);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::with('conference')->find($id);

        if(!$user){
            return response()->json(["message" => "user sa nenasiel"], Response::HTTP_NOT_FOUND);
        }

        return response()->json($user);
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
        $user = User::find($id);

        if(!$user){
            return response()->json(["message" => "user not found"], Response::HTTP_NOT_FOUND);
        }

        $request->validate([
            "role" => "string|max:255",
            "name" => "string|max:255",
            "email" => "string|max:255",
            "password" => "string|max:255",
        ]);

        $user->update($request->only(['role','name','email','password']));

        return response()->json(["message" => "User was edited"], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if(! $user){
            return response()->json(["message" => "User not found"], Response::HTTP_NOT_FOUND);
        }

        $user->delete();

        return response()->json(["message" => "User was deleted"], Response::HTTP_OK);
    }
}
