<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class message extends Model {
    protected $table = 'message';
    protected $primaryKey = 'messageId';
    protected $guarded = [];
    public $timestamps = false;


}
