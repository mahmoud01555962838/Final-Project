<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function createUser(Request $request){
        $userData=$request->validate(
            [
                "name"=>"required | string",
                "email"=>"required | string |email |unique:users,email",
                "password"=>"required |string |min:6|confirmed "

            ]
        );

        $user=User::create(
            [
                "name"=>$userData["name"],
                "email"=>$userData["email"],
                "password"=>bcrypt($userData["password"])

            ]);

            $token = $user->createToken('apiToken')->plainTextToken;
            $res = [
                'user' => $user,
                'token' => $token
            ];
            return response($res, 201);

}



public function signin(Request $request){
    // 1- validate data
    $userData = $request->validate([
        "email"=> "required | string | email",
        "password"=>"required | string | min: 6",
    ]);
    // check the email  in database 
    $user = User::where("email", $userData["email"])->firstOrFail();
    // check the email and password
    if(!auth()->attempt($request->only("email","password"))) {
    return response()->json([
        "msg"=> "invalid Data",
    ], 401);
    }
    // send token 
    if($userData){
        return response()->json([
            "msg"=> "login succusfully",
            "token"=>$user->createToken("token")->plainTextToken,
        ]);
    }
}


public function logout(Request $request)
{
    // $request->user()->currentAccessTokens()->delete();
    $request->user()->tokens()->delete();
        return [
            'message' => 'user logged out'
        ];
}

}
