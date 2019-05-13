<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\MC;

class MCController extends Controller
{
public function ResultShow(){
    $students=MC::all();
    $name=Input::post('name');
    $roll=Input::post('roll');
    $names=MC::where('name',$name)->value('roll');
    $rolls=MC::where('roll',$roll)->value('name');
    $newrolls=MC::where('roll',$roll)->value('newroll');
    $name_roll=array($names,$rolls,$newrolls);

    if(($name==$rolls && $roll==$names)&&($newrolls!='Fail'))
    {
    return view('MCResultShow',compact(['name_roll','students']));
    }
    elseif((($name==$rolls && $roll==$names)&&($newrolls=='Fail')))
    {
        return view('MCFailResultShow',compact(['name_roll','students']));
    }
    else
    {
        return view('MCMissFill');
    }
}
}