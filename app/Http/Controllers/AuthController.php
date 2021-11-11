<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Session\Middleware\StartSession;

class AuthController extends Controller {

    public function auth(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            return "SuccessFully Logged In";
        }else{
            return "Invalid Creadential"; 
        }
    }

    public function getCurrent(Request $request, Response $response) {
        return $response;
    }

}


?>