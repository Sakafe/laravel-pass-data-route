<?php

use Illuminate\Support\Facades\Route;

function getUsers(){
    return [
        1 => ['name'=>'Sakafe','phone'=>'123456','city'=>'Dhaka'],
        2 => ['name'=>'Foysal','phone'=>'789456','city'=>'Comilla'],
        3 => ['name'=>'Shihan','phone'=>'0123456','city'=>'Pabna'],
   ];
}

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about-test', function () {
    return view('about');
});

Route::redirect('/about','/about-test',301)->name('about');

Route::get('/post', function () {
    return view('post');
})->name('mypost');

Route::get('/test', function () {
    return view('test');
});
Route::get('/users', function () {
    $name = 'Google Baba';
    $names = getUsers();
//     $names =[
//         1 => ['name'=>'Sakafe','phone'=>'123456','city'=>'Dhaka'],
//         2 => ['name'=>'Foysal','phone'=>'789456','city'=>'Comilla'],
//         3 => ['name'=>'Shihan','phone'=>'0123456','city'=>'Pabna'],
//    ];
    // return view('users',['user'=>$name,'city'=>'<script>alert("Hello Dhaka");</script>']);
    // return view('users')->with('user',$name)->with('city','Dhaka');
    // return view('users')->withUser($name)->withCity('Dhaka');

    return view('users',[
        'user'=>$names,
    ]);
});

Route::get('/users/{id}', function ($id) {
    $users = getUsers();

   abort_if(!isset($users[$id]),404);

    $user = $users[$id];
    return view('usersDetails',['id'=>$user]);
    // return "<h3> User: $id </h3>";
})->name('usersId');
