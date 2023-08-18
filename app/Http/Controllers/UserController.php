<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Builder;

class UserController extends Controller
{

    public function GetUsers(Request $request){
        $users = User::where('name',
            $request->alfabet?'like':'<>',
            $request->alfabet?"$request->alfabet%":""
        )->paginate(2);
        $users->appends([
           'alfabet'=> $request->alfabet
        ]);
        return view('users.list-user',compact('users'));
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(8);
        return view('backend.pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.user.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        return back()->withSuccess('Kullanıcı Başarı ile oluşturuldu');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::where('id', $id)->first();
        $users = User::get();

        return view('backend.pages.user.edit', compact('user', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => $request->role,
        ]);

        return back()->withSuccess('Güncelleme işlemi başarı ile gerçekleştirildi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::where('id', $id)->firstOrFail();
        $user->delete();

        return back()->withSuccess('Silme işlemi başarı ile gerçekleştirildi.');
    }
}
