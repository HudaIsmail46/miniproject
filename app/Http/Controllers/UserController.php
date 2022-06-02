<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['email' => $req->email])
            ->where(['password' => $req->password])
            ->first();

        if (!$user) {
            return redirect('/login/?failed=true')->with('failed', 'Username or password is not matched');
        } else {
            $req->session()->put('user', $user);
            return redirect('/?success=true');
        }
    }

    function register(Request $req)
    {
        try {
            $user = DB::insert(
                'insert into users (name, email, password, created_at)
        values (?, ?, ?, ?)',
                [$req->fullname, $req->email, $req->password, now()],
            );

            if ($user == true) {
                return redirect('/login')->with('success', 'Successfully register');
            }
        } catch (\Exception) {
            return redirect('/register/?failed=true')->with('failed', 'Failed to register');
        }
    }

    function getmyuser(Request $req)
    {
        $data = DB::table('users')
            ->where('id', $req->rid)
            ->first();

        return view('account', ['user' => $data]);
    }

    function getuser(Request $req)
    {
        $data = DB::table('users')
            ->where('id', $req->rid)
            ->first();

        return view('editmyuser', ['user' => $data]);
    }

    function edituser(Request $req)
    {
        try {
            DB::table('users')
                ->where('id', $req->rid)
                ->update([
                    'name' => $req->fullname,
                    'password' => $req->password,
                    'email' => $req->email,
                    'updated_at' => DB::raw('now()'),
                ]);
        } catch (\Exception) {
            return redirect('editmyuser?rid=' . $req->rid . '&success=2')->with('failed', 'Failed to update');
        }
        return redirect('editmyuser?rid=' . $req->rid . '&success=1')->with('success', 'Successfully updated');
    }

    function listuser()
    {
        return view('listuser', ['listofuser' => DB::table('users')->paginate(5)]);
    }

    function search(Request $req)
    {
        return view('listuser', [
            'listofuser' => DB::table('users')
                ->select(DB::raw('id, name, email, password, created_at, updated_at'))
                ->where('email', 'like', '%' . $req->search . '%')
                ->orWhere('name', 'like', '%' . $req->search . '%')
                ->paginate(5),
        ]);
    }

    function deleteuser(Request $req)
    {
        DB::table('users')
            ->where('id', $req->rid)
            ->delete();
        return redirect()->back();
    }
}
