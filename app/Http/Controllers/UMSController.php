<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UMSController extends Controller
{
    public function getAllUsers()
    {
        return view('users.index');
    }

    public function getAddUser()
    {
        return view('users.create');
    }
}
