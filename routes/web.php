<?php

use App\Http\Controllers\PracticeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\showMessage;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\RecordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route :: get("/hello_world",function(){
    return "hello world";
});

route :: get("print/{name}",function($name){
    return $name;
});

route :: view("/home","home",['name'=>'Dhritesh']);

route :: get("welcome/{name?}",function($n=null){
    return "welcome to this page <br> $n ";
});

route :: get("/practice",[PracticeController::class , "showMessage"]);

route :: redirect("/welcome","home");

route :: view("/showhome/{name}","home",['name'=>'dhritesh']);
// route :: view("/showhome/{name}/{age}","home",['name'=>$name,'age'=>$age]);

// route:: get("user/{name}/{id}",function($name=null,$id=null){
//     return "$name <br> $id";
// })->where(['name'=>'[A-Za-z]+','id'=>'[0-9]{4}']);

route:: get("user/{name}/{id}",function($name=null,$id=null){
    return "$name <br> $id";
})->whereAlphaNumeric('id')->whereAlpha('name');

route :: fallback(function(){
    return "no page found";
});

route :: get("profile",[InfoController::class,"details"]);
route :: get("profile/{user?}/{gender?}",[InfoController::class,"details"]);

//invokable controller
route::get("invoke",SingleActionController::class);

//resource controller
route::resource("record",RecordController::class);
route::view("form","resourceForm");


