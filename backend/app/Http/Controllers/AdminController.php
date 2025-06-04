<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\User;
use App\Models\Conference;

class AdminController extends Controller
{
    public function verify(){
        return true;
    }

    public function assignedEditors(string $id){
        $users = User::join('conference_user','users.id','=','conference_user.user_id')->where('conference_id',$id)->get();

        return response()->json($users);
    }

    public function searchUsers(string $name){
        $users = User::where('name',"like","%".$name."%")->get();

        return response()->json($users);
    }

    public function addEditor(Request $request){
        $request->validate([
            "conference_id" => "required|int",
            "user_id" => "required|int",
        ]);

        $user = User::find($request->user_id);
        if(!$user){
            return response()->json(["message" => "user not found"], Response::HTTP_NOT_FOUND);
        }

        $conference = Conference::find($request->conference_id);
        if(!$conference){
            return response()->json(["message" => "conference not found"], Response::HTTP_NOT_FOUND);
        }

        $user->conference()->attach($conference);

        return $user
        ? response()->json(["message" => "editor added"], Response::HTTP_CREATED)
        : response()->json(["message" => "editor was not added"], Response::HTTP_FORBIDDEN);
    }
}