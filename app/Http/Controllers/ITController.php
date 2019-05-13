<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\IT;

class ITController extends Controller
{
public function ResultShow(){
    $students=IT::all();
    $name=Input::post('name');
    $roll=Input::post('roll');
    $names=IT::where('name',$name)->value('roll');
    $rolls=IT::where('roll',$roll)->value('name');
    $newrolls=IT::where('roll',$roll)->value('newroll');
    $name_roll=array($names,$rolls,$newrolls);

    if(($name==$rolls && $roll==$names)&&($newrolls!='Fail'))
    {
    return view('ITResultShow',compact(['name_roll','students']));
    }
    elseif((($name==$rolls && $roll==$names)&&($newrolls=='Fail')))
    {
        return view('ITFailResultShow',compact(['name_roll','students']));
    }
    else
    {
        return view('ITMissFill');
    }
}
}