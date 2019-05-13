<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\MP;

class MPController extends Controller
{
public function ResultShow(){
    $students=MP::all();
    $name=Input::post('name');
    $roll=Input::post('roll');
    $names=MP::where('name',$name)->value('roll');
    $rolls=MP::where('roll',$roll)->value('name');
    $newrolls=MP::where('roll',$roll)->value('newroll');
    $name_roll=array($names,$rolls,$newrolls);

    if(($name==$rolls && $roll==$names)&&($newrolls!='Fail'))
    {
    return view('MPResultShow',compact(['name_roll','students']));
    }
    elseif((($name==$rolls && $roll==$names)&&($newrolls=='Fail')))
    {
        return view('MPFailResultShow',compact(['name_roll','students']));
    }
    else
    {
        return view('MPMissFill');
    }
}
}