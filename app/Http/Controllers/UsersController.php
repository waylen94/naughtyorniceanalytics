<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    
    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }
    
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());
        $this->authorize('update', $user);
        return redirect()->route('users.show', $user->id)->with('success', 'Personal data update successful！');
    }
}
