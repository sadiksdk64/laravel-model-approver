<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return "Index";
    }

    public function create()
    {
        // $user = User::find(1);
        // return $user->comments;
        //User::factory(10)->create();
        return "create";
    }
}
