<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\graficosKPI1;

class InterfaceController extends Controller
{
    
    public function __construct() {
        $this->_KPI1points = new graficosKPI1;
    }

    public function interface() {

        $string='{name: "Series 2",
          data:[';
        $string2='';
        $points = $this->_KPI1points->getAllpoints();
        $prova = $this->_KPI1points->getAllpoints()->toArray();
        $prova2 = $this->_KPI1points->getAllpoints()->toJson();
        
        foreach($prova as $result){
   $string = $string . "[" . $result['x'] .",". $result['y']. "],"; 
   $string2 = $string2 . "[" . $result['x'] .",". $result['y']. "],"; 
  
 
}
$string=$string ."]}";
       

        return view('welcome')
                        ->with('points', $points)
                        ->with('prova', $string)
                        ->with('prova2', $prova2)
                ->with('prova3', $string2)
                ;
    }
   
   
}


