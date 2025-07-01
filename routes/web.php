<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::get('/inner',function() {
    return view('inner.index',["names"=>"khaled"]);
});
route::get('/outer', function(){
    return view('outer.index',["passval"=>"1"]);
});   