<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\EP;

class EPController extends Controller
{
public function ResultShow(){
    $students=EP::all();
    $name=Input::post('name');
    $roll=Input::post('roll');
    $names=EP::where('name',$name)->value('roll');
    $rolls=EP::where('roll',$roll)->value('name');
    $newrolls=EP::where('roll',$roll)->value('newroll');
    $name_roll=array($names,$rolls,$newrolls);

    if(($name==$rolls && $roll==$names)&&($newrolls!='Fail'))
    {
    return view('EPResultShow',compact(['name_roll','students']));
    }
    elseif((($name==$rolls && $roll==$names)&&($newrolls=='Fail')))
    {
        return view('EPFailResultShow',compact(['name_roll','students']));
    }
    else
    {
        return view('EPMissFill');
    }
}
}