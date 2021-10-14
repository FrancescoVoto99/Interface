<?php

namespace App\Models;

use App\Models\Resources\kpihistory;
use App\Models\Resources\kpi;

class kpihistorys {

    
    public function getKpiHistory() {
        $allkpi=array();
      
          
       
       $kpi=kpi::where('kpiId','!=',0)->pluck('name','kpiId');
       foreach($kpi as $key => $val1){
        $data=array();
        $array=array(); 
        $kpihistory = kpihistory::where('kpiId','=',$key)->pluck('value','time');
                foreach( $kpihistory as $key => $val) {
          
            $array[]= array($key,$val);
                }
     
          $data["data"]=$array;
          $data["name"]=$val1;
          $allkpi[$val1]=$data;
            }
            
        return json_encode($allkpi);
    }
  // for ($mul = 0; $mul <sizeof( $kpihistory)-2 ; ++$mul) {

         //   $array[]= array($kpihistory[$mul],$kpihistory[$mul+1]);

          //  };
}
