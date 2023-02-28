<?php

Route::get('test',function(){
    echo "hello";
});
Route::get('add/{a}/{b}',
[Raad\Demo\demoController::class,'add']);