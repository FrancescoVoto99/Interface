<?php

namespace App\Models;

use App\Models\Resources\message;

class messages {

    
    public function getAllMessages() {
       // da rivedere jhjhjhh
        $messages = message::where('messageId','!=',"S0")->get();
        return $messages;
    }

}
