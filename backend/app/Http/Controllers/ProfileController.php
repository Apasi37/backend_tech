<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Conference;

use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function conferences(string $id){
        $conf = DB::table('conference_user')->join('conferences','conferences.id','=','conference_user.conference_id')->where('user_id',$id)->get();

        return response()->json($conf);
    }
}
