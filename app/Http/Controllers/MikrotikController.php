<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MikrotikUser;
use Illuminate\Http\Request;


class MikrotikController extends Controller
{
    public function index()
    {
        $users = MikrotikUser::all();
        return view('mikrotik.index', compact('users'));
    }

    public function create()
    {
        return view('mikrotik.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:mikrotik_users',
            'password' => 'required|string|min:6',
            'profile' => 'nullable|string'
        ]);

        // $result = $mikrotik->addUser($request->name, $request->password, $request->profile ?? 'default');

        MikrotikUser::create([
            'name' => $request->name,
            'password' => bcrypt($request->password), // Simulasi enkripsi password
            'profile' => $request->profile ?? 'default',
        ]);

        return redirect()->route('mikrotik.index')->with('success', 'Akun WiFi berhasil dibuat!');
    }

    public function destroy($id)
    {
        $user = MikrotikUser::findOrFail($id);
        $user->delete();

        return redirect()->route('mikrotik.index')->with('success', 'Akun WiFi berhasil dihapus!');
    }
}
