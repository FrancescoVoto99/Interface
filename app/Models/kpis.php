<?php

namespace App\Models;

use App\Models\Resources\kpi;

class kpis {

    
    public function getAllKpi() {
       
        $kpi = kpi::where('kpiId','!=',0)->get();
        return $kpi;
    }

}
