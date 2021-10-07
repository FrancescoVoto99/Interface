<?php

namespace App\Models;

use App\Models\Resources\kpihistory;

class kpihistorys {

    
    public function getKpiHistory($kpiId) {
       $array=array(); 
          
       $kpihistory = kpihistory::where('kpiId','=',$kpiId)->pluck('value','time');
       foreach( $kpihistory as $key => $val) {
        $tempo=strtotime($key);
        
        $array[]= array($tempo,$val);
        
   }
       // for ($mul = 0; $mul <sizeof( $kpihistory)-2 ; ++$mul) {

         //   $array[]= array($kpihistory[$mul],$kpihistory[$mul+1]);

          //  };

        return json_encode($array);
    }

}
