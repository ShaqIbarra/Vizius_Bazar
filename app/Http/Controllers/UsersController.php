<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Transaction;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user']);

        if (\Auth::user()->hasRole('admin')) {
            $users = User::latest()->get();

            return view('admin.users.index', compact('users'));

        } else if (\Auth::user()->hasRole('user')){

            $id = \Auth::user()->id;
            $transaction = Transaction::where('user_id', $id)->get()->first();

            return view('admin.account_information.index', compact('transaction'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $method = 'CREATE';

        return view('admin.users.create', compact('method'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $role_user = Role::where('name', 'user')->first();
        $user->roles()->attach($role_user);

        flash('User successfully created.')->success()->important();

        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->get()->first();
        $method = 'EDIT';

        return view('admin.users.edit', compact('user', 'method'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (isset($request->c_password)) {
            if ($request->password == $request->c_password) {
                $user = User::where('id', $id)->get()->first();
                $user->password = bcrypt($request->password);
                $user->save();

                flash('Password successfully changed.')->success()->important();

                return redirect('admin');
            } else {
                flash('No match in password repeat. Try again.')->error()->important();

                return redirect('admin');
            }
        } else {
            $user = User::where('id', $id)->get()->first();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            flash('User successfully edited.')->success()->important();

            return redirect('admin/users');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        flash('User successfully deleted.')->success()->important();

        return redirect()->back();
    }
}
