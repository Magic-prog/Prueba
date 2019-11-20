<?php

namespace App\Http\Controllers\Samuel;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Samuel\SamuelBaseController;
use Illuminate\Support\Facades\App;
use App\User;
use App\Piraquive;


class SamuelController extends SamuelBaseController
{
    public function index(){
        $this->title = "Bienvenido Samuel";
        $this->title_page = "ASAP";
        $prueba = user::findOrFail(1);
        $prueba->name = "prueba";
        $prueba-> save();
        $this->users = User::select("*")->get();
        $this->piraquive = Piraquive::all();
        
        return view('Samuel.index',$this->data);
    }
}

?>