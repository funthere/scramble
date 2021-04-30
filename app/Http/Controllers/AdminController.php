<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->user()->is_admin == false) {
            auth()->logout();

            return redirect(route('login'));
        }

        $histories = History::orderByDesc('created_at')->paginate(25);

        return view('admin')->with('histories', $histories);
    }
}
