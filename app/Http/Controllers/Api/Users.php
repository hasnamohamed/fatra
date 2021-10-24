<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class Users extends Controller
{
    public function login(Request $request)
    {
        $rules =[
         'email'=>'required|email',
         'password'=>'required',
         'name'=>'required',
        ];
       $validate = Validator::make(request()->all(),$rules);
       if($validate->fails())
       {
           return response(['status'=>false,'messages'=>$validate->errors()->add('field', 'Something is wrong with this field!')]);
       }
       else{
           if(auth()->attempt(['email'=>request('email'),'password'=>request('password'),'name'=>request('name')]))
           {
              $user = auth()->user();
              $user ->api_token = Str::random(60);
              $user->stdClass::save();
              return response(['status'=>true,'user'=>$user,'token'=>$user ->api_token]);
           }
           else{
            return response(['status'=>false,'messages'=>$validate->errors()->add('field', 'Invalid Data Entry!')]);
           }
       }
    }
}
