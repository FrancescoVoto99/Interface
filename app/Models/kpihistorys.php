<?php

namespace App\Models;

use App\Models\Resources\kpihistory;

class kpihistorys {

    
    public function getAllKpiHistory() {
       
        $kpihistory = kpihistory::where('kpihisId','!=',0)->get();
        return $kpihistory;
    }

}
