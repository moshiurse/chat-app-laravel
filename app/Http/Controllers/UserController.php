<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller {
    
    public function showAll(Request $request) {
        return User::all();
    }

    public function show($id) {
        return User::find($id);
    }

    public function save(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->username = $request->username;
        $user->save();

        return $user;
    }

    public function update(Request $request){
        $user = User::where('id', $request->id)
            ->update([
                'name' => $request->name, 
                'password' => Hash::make($request->password), 
                'username' => $request->username
            ]);
        return $user;
    }

    public function delete($id){

        $user = User::find($id);
        if($user){
            $user->delete();
            return response()->json(['status' => 'User with User Id => '.$id.' Deleted'] , Response::HTTP_OK);
        }else{
            return response()->json(['status' => 'User Not Found To Delete'] , Response::HTTP_NOT_FOUND);
        }
        
    }
}

?>