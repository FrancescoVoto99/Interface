<?php

namespace App\Models;

use App\Models\Resources\graficoKPI1;

class graficosKPI1 {

    
    public function getAllpoints() {
       // da rivedere jhjhjhh
        $points = graficoKPI1::where('id','!=',0)->get();
        
        return $points;
    }
    public function getAllpointsString() {
       // da rivedere jhjhjhh
        $points = graficoKPI1::where('id','!=',0)->get();
        
        return $points;
    }

}
