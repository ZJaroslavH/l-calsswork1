<?php

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

Route::get("/room/{id}", function ($id){
    $rooms=[
        "1"=>[
            "title"=> "Учеба",
            "description"=> "",
            "action"=> [
                "пойти домой"=>"2",
                "Пожрать"=>"2",
                "спеть Марсельезу"=>"3",

            ]
        ],
        "2"=>[
            "title"=> "Пещера2",
            "description"=> "Пещера. Холодною .Хочу домой2",
            "action"=> [
                "пойти домой"=>"22",
                "Пожрать"=>"32",
                "спеть Марсельезу"=>"32",

            ]
        ],
        "3"=>[
            "title"=> "Смерть",
            "description"=> "Пещера. Холодною .Вы умерли",

        ],
    ];
    $room=$rooms[$id];
    if($id==3){
        return view("death",[
            "room"=>$room
        ]);
    }

        return view("quest",[
        "room"=>$room
    ]);

})->name("room");

Route::get("/", function (){
    return redirect()->route("room",["id"=>1]);
});