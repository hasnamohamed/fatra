<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Users extends BackEndController
{
    public function index()
    {
        $users = User::paginate(10);
        return view('back-end.users.index', compact('users'));
    }

    public function create()
    {
        return view('back-end.users.create');
    }
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.index');
    }
    public function edit($id)
    {
        $user = User::FindOrFail($id);
        return view('back-end.users.edit', compact('user'));
    }
    public function update($id, Request $request)
    {
        $user = User::FindOrFail($id);
        $requestArray= [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ];
        if(request()->has('password') && request()->get('password')!='')
        {
            $requestArray=$requestArray + ['password' => Hash::make($request->password)];
        }
        $user->update($requestArray);
        return redirect()->route('users.index');
    }
    public function destroy($id)
    {
         User::FindOrFail($id)->delete();
        return redirect()->route('users.index');
       }
}
