<?php

namespace App\Models;

use App\Models\Resources\albero;

class alberi {

    
    public function getAllNodes() {
       
        $nodes = albero::where('nodeId','!=',0)->get();
        return $nodes;
    }

}
