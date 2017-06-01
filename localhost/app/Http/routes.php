<?php


Route::get("/room/{id}", function ($id){
    $rooms=[
        "1"=>[
            "title"=> "Пещера",
            "description"=> "Пещера. Холодною .Хочу домой",
            "action"=> [
                "пойти домой"=>"2",
                "Пожрать"=>"3",
                "спеть Марсельезу"=>"3",

            ]
        ],
        "2"=>[

        ],
        "3"=>[

        ],
    ];
    $room=$rooms[$id];
    return view("quest",[
        "room"=>$room
    ]);

})->name("room");

Route::get("/", function (){
    return redirect()->route("room",["id"=>1]);
});