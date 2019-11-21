<?php

namespace App\Http\Controllers\Samuel;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Samuel\SamuelBaseController;
use Illuminate\Support\Facades\App;
use App\Materias;



class SamuelController extends SamuelBaseController
{
    public function index(){
        $this->title = "Bienvenido Samuel";
        $this->title_page = "ASAP";
        $this->materias = Materias::all();
        
        return view('Samuel.index',$this->data);
    }
}

?>