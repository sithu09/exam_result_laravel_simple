<?php

Route::group(['prefix'=>'/'],function(){
    Route::get('',"MajorsController@choice");
    Route::get('/civil',function(){ return view('CivilRegister');});
    Route::get('/ec',function(){ return view('ECRegister');});
    Route::get('/ep',function(){ return view('EPRegister'); });
    Route::get('/mp',function(){ return view('MPRegister');});
    Route::get('/mc',function(){ return view('MCRegister'); });
    Route::get('/it',function(){ return view('ITRegister'); });
});

Route::group(['prefix'=>'/'],function(){
    Route::post('/civillogin','CivilController@ResultShow')->middleware('civil');
    Route::post('/eclogin',"ECController@Resultshow")->middleware('ec');
    Route::post('/eplogin','EPController@Resultshow')->middleware('ep');
    Route::post('/mplogin','MPController@Resultshow')->middleware('mp');
    Route::post('/mclogin','MCController@Resultshow')->middleware('mc');
    Route::post('/itlogin',"ITController@Resultshow")->middleware('it');
});



   











    

