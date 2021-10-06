<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class kpihistory extends Model {
    protected $table = 'kpihistory';
    protected $primaryKey = 'kpihisId';
    protected $guarded = [];
    public $timestamps = false;


    public function Kpi() {
        return $this->belongsTo(kpi::class);
    }

}
