<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin_dashboard', compact('users'));
    }

    public function updateRole(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'role' => 'required|in:Administrateur,Editeur,Lecteur,Invité,Désactivé',
        ]);

        $user->update(['role' => $validatedData['role']]);

        return redirect()->back()->with('success', 'Rôle mis à jour avec succès.');
    }


}
