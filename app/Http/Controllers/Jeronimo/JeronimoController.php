<?php

namespace App\Http\Controllers\Jeronimo;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Jeronimo\JeronimoBaseController;
use Illuminate\Support\Facades\App;

class JeronimoController extends JeronimoBaseController
{
    public function index(){
    $this->title = "Bienvenido Jeronimo";
    $this->title_page = "ASAP";
    return view('Jeronimo.index',$this->data);
    }
}

?>