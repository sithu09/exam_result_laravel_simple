<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Civil;

class CivilController extends Controller
{
public function ResultShow(){
    $students=Civil::all();
    $name=Input::post('name');
    $roll=Input::post('roll');
    $point=Civil::where('point',$roll)->value('point');
    $names=Civil::where('name',$name)->value('roll');
    $rolls=Civil::where('roll',$roll)->value('name');
    $newrolls=Civil::where('roll',$roll)->value('newroll');
    $name_roll=array($names,$rolls,$newrolls);

    if(($name==$rolls && $roll==$names)&&($newrolls!='Fail'))
    {
    return view('CivilResultShow',compact(['name_roll','students']));
    }
    elseif((($name==$rolls && $roll==$names)&&($newrolls=='Fail')))
    {
        return view('CivilFailResultShow',compact(['name_roll','students']));
    }
    else
    {
        return view('CivilMissFill');
    }
}
}