<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Role;
Use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user']);

        $users = User::latest()->get();

        $id = \Auth::user()->roles_id;
        $user_id = \Auth::user()->id;
        
        return view('admin.index', compact('users', 'id'));
    }
}
