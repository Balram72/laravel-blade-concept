<?php

use Illuminate\Support\Facades\Route;


function getUser(){
    return [
            1 => ['name'=>'A','phone'=>'12255666'],
            2 => ['name'=>'B','phone'=>'22255666'],
            3 => ['name'=>'C','phone'=>'32255666'],
            4 => ['name'=>'D','phone'=>'42255666'],
        ];
}



Route::get('/', function () {
    return view('website.welcome');
});
Route::get('/about', function () {
    return view('website.about');
});
Route::get('/contact', function () {
    return view('website.contact');
});
Route::get('/home1',function(){
    return view('home1');
});
Route::get('/home',function(){
    return view('home');
});

Route::get('/homejs',function(){
    return view('homeJs');
});

Route::get('/users',function(){
    
        $name = "Balram panda";
        $names = getUser();
        return view('users',[
                'user'=>$name,'city'=>'Surat',
                'msg' => "<script>alert('Welcome My Site')</script>",
                'msge'=>'',
                'array'=>$names
        ]);
    
            // return view('users')
            // ->with('user',$name)
            // ->with('city','Surat')
            // ->with('msg','<script>alert("Welcome My Site")</script>');

            // return view('users')->withUser($name)->withCity('Surat')->withMsg('<script>alert("Welcome My Site")</script>');

});
Route::get('/user/{id}',function($id){
    $users = getUser();
    abort_if(!isset($user[$id]),404); 
    $user =  $users[$id];
    return view('singleuser',['id' => $user]);
})->name('view.user');