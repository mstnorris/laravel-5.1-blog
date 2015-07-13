<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function getDashboard()
    {
        return view('users.dashboard');
    }

    public function getMyRoles()
    {
        return view('users.my-roles');
    }

    public function getMyPermissions()
    {
        return view('users.my-permissions');
    }
}
