<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class subsystem extends Model {
    protected $table = 'subsystems';
    protected $primaryKey = 'subsysId';
    protected $guarded = [];
    public $timestamps = false;


}
