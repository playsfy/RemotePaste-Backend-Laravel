<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;

class UserController extends Controller
{
        public function ologin(Request $request)
    {
        //return $request->email;
    	if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
    		
    		$user = Auth::user();
    		//$data['token'] = $user->createToken('QuizApp')->accessToken;
    		//return response()->json(['success' => $success], 200);
    		//$user = User::where('email', $email)->get();
			//'data'    => $user,
    		return response()->json([
    			'status'  => true,
    			'data'    => $user,
    			'message' => 'Login process successfull.'
    		]);
    	}
    	else
    	{
    		//return response()->json(['error' => 'Unauthorized'], 401);
    		return response()->json([
    			'status'  => false,
    			'data'    => [],
    			'message' => 'Login Email or Password is Incorrect'
    		]);
    	}
    }

    public function oregister(Request $request)
    {
    	$data = new User;

    	$data->name 	= $request->name;	
		$data->email 	= $request->email;
    	$data->password =  Hash::make($request->password);
    	$data->type 	= "user";

    	if ($data->save()) {

    		return response()->json([
    			'status'  => true,
    			'data'    => $data,
    			'message' => 'User Registered successfully'
    		]);
    	}
    	else
    	{
    		return response()->json([
    			'status'  => false,
    			'data'    => [],
    			'message' => 'Users registration failed'
    		]);
    	}
    }

    public function userlist(Request $request)
    {
    	$users = User::all();

    	if (count($users) > 0) {

    		return response()->json([
    			'status'  => true,
    			'data'    => $users,
    			'message' => ''
    		]);
    	}
    	else
    	{
    		return response()->json([
    			'status'  => false,
    			'data'    => [],
    			'message' => 'No Users Found '
    		]);
    	}
    }

    public function userinfo(Request $request)
    {
        $email = $request->email;

        $user = User::where('email', $email)->get();

        if (count($user) == 1) {

            return response()->json([
                'status'  => true,
                'data'    => $user,
                'message' => ''
            ]);
        }
        else
        {
            return response()->json([
                'status'  => false,
                'data'    => [],
                'message' => 'No User Found '
            ]);
        }

    }
}
