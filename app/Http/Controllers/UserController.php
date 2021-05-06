<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = new User();
        $users = $user->all();
        return view('painel.user.index', compact(['users']));
    }

    public function create()
    {
        return view('painel.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required'],
            'summary' => ['required', 'max:255'],
            'facebook' => ['max:255'],
            'instagram' => ['max:255'],
            'linkedin' => ['max:255'],
            'twitter' => ['max:255'],
            'photo' => ['required'],
        ]);

        $request['password'] = Hash::make($request['password']);
        $path = $request->file('photo')->store('users');

        $user = new User();

        $user->fill($request->all());
        $user->photo = $path;
        $user->save();

        return redirect()->route('user.index')->with('message', 'Usuário cadastrado');
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        return view('painel.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required'],
            'summary' => ['required', 'max:255'],
            'facebook' => ['max:255'],
            'instagram' => ['max:255'],
            'linkedin' => ['max:255'],
            'twitter' => ['max:255'],
            'photo' => ['required'],
        ]);

        $request['password'] = Hash::make($request['password']);
        $path = $request->file('photo')->store('users');

        $user = User::find($id);
        $user->fill($request->all());
        $user->photo = $path;
        $user->save();

        return redirect()->route('user.index')->with('message', 'Usuário atualizado');
    }

    public function destroy(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')->with('message', 'Usuário deletado');
    }

    public function pdf()
    {
        $user = new User();
        $users = $user->all();

        $data = [
            'users' => $users
        ];

        $pdf = PDF::loadView('painel.user.pdf', $data);
        return $pdf->download('user.pdf');
    }
}
