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
        $user = auth()->user();

        $user->load('roles');

        return view('users.my-roles', compact('user'));
    }

    public function getMyPermissions()
    {
        $user = auth()->user();

        $user->load('roles.permissions');

        return view('users.my-permissions', compact('user'));
    }
}
