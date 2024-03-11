<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function loginAdmin()
    {
        return view('admin_login');
    }
    public function displayDashboard()
    {
        return view('admin.dashboard');
    }


    public function dashboard(Request $request)
    {
        $admin_email = $request->input('admin_email');
        $admin_password = $request->input('admin_password');

        $result = DB::table('tbl_admin')
            ->where('admin_email', $admin_email)
            ->where('admin_password', $admin_password)
            ->first();

        if ($result) {
            return view('admin.dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
}
