<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GlobalStats;

class ProfileController extends Controller
{
    public function show()
    {
        $user = session('user');

        if (!$user) {
            return redirect('/login');
        }

        $stats = GlobalStats::where('name', $user->last_name)->first();

        return view('perfil', compact('user', 'stats'));
    }
}
