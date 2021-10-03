<?php

namespace App\Models;

use App\Models\Resources\subsystem;

class subsystems {

    
    public function getAllSubsystem() {
       
        $subsystem = subsystem::where('subsysId','!=',0)->get();
        return $subsystem;
    }

}
