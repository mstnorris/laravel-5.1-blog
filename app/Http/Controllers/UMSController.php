<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UMSController extends Controller
{
    public function getAllUsers()
    {
        return view('users.all-users');
    }

    public function getAddUser()
    {
        $roles = Role::lists('name', 'id')->all();

        return view('users.add-user', compact('roles'));
    }

    public function getAllRoles()
    {
        return view('users.all-roles');
    }

    public function getAllPermissions()
    {
        return view('users.all-roles');
    }
}
