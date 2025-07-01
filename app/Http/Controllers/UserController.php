<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Whoops\Handler\JsonResponseHandler;

class UserController extends Controller
{
    //manually 
    function index()
    {
        $users=[
        ['id'=>1,'me'=>"ahmed"],
         ['id'=>10,'me'=>"ali"],
          ['id'=>100,'me'=>"khaled"],
        ];
//         foreach($users as $user)
// {
//     echo $user ['id'].','.$user['me']."\n";
// }

//     }
    // here to return response inform of json 1 response 
//    return response()->json(["name"=>"khaled"]);
// return more than 1 values 
    return response()->json($users);
}
}