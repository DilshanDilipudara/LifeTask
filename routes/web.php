<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    $data=App\task::all();
    return view('Home')->with('tasks',$data);
});

Route::get('/register',function(){
    return view('Register');
});




Route::get('/about','pageController@aboutpage');
Route::get('/login','pageController@loginpage');
Route::post('/saveTask','pageController@store');
Route::get('/markascompleted/{id}','pageController@UpdateTaskAsCompleted');
Route::get('/markasnotcompleted/{id}','pageController@UpdateTaskAsNotCompleted');
Route::get('/deletetask/{id}','pageController@deletetask');
Route::get('/update/{id}','pageController@update');
Route::post('/updatetask','pageController@updatetask');