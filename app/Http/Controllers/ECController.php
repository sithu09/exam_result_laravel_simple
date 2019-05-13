<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\EC;

class ECController extends Controller
{
public function ResultShow(){
    $students=EC::all();
    $name=Input::post('name');
    $roll=Input::post('roll');
    $names=EC::where('name',$name)->value('roll');
    $rolls=EC::where('roll',$roll)->value('name');
    $newrolls=EC::where('roll',$roll)->value('newroll');
    $name_roll=array($names,$rolls,$newrolls);

    if(($name==$rolls && $roll==$names)&&($newrolls!='Fail'))
    {
    return view('ECResultShow',compact(['name_roll','students']));
    }
    elseif((($name==$rolls && $roll==$names)&&($newrolls=='Fail')))
    {
        return view('ECFailResultShow',compact(['name_roll','students']));
    }
    else
    {
        return view('ECMissFill');
    }
}
}