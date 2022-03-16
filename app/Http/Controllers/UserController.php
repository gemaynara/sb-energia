<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $users = User::where('is_admin', 1)->get();
        return view('pages.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {

        $data = $request->except('_token');
        $data['password'] = Hash::make($request->input('password'));
        $data['is_admin'] = 1;

        $user = User::create($data);

        return redirect()->route('users.index')->with('success', 'Usuário registrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.users.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {

        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

        $user = User::find($id);
        $user->update($input);

        return redirect()->route('users.index')
            ->with('success', 'Usuário alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->active = 0;
        $user->save();
    }

    public function active($id)
    {
        $user = User::find($id);
        $user->active = 1;
        $user->save();
    }
}
