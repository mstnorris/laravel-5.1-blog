<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function getDashboard()
    {
        return view('users.dashboard');
    }

    public function getIndividualUserArticles($id)
    {
        $user = User::findOrFail($id);

        $user->load('articles');

        return view('users.individual-user', compact('user'));
    }
}
