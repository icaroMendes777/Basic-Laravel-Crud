<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserStoreRequest;
use Illuminate\Http\Request;
use App\Models\User;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();

        $total = count($users);
        //dd($users);
       // dd($users);

        return view('users.list', ['users' => $users,
                                    'total' => $total]);

    }

    public function user($id)
    {
        $user = User::find($id);
       // dd($user);
        return view('users.inner', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('users.new_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        //dd($request->all());


        $validated = $request->validated();

        User::create($validated);


        //----!!! IMPORTANTE!
        $request->session()->regenerate();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $user = User::find($id);

        return view('users.inner', ['user' => $user]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
