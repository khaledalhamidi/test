<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index()
    {
        $users=[
        ['id'=>1,'me'=>"ahmed"],
         ['id'=>10,'me'=>"ali"],
          ['id'=>100,'me'=>"khaled"],
        ];
        foreach($users as $user)
{
    echo $user ['id'].','.$user['me']."\n";
}

    }
    
}


