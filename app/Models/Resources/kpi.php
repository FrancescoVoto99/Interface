<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class kpi extends Model {
    protected $table = 'kpi';
    protected $primaryKey = 'kpiId';
    protected $guarded = [];
    public $timestamps = false;


    public function valueChart() {
        return $this->hasMany(kpihistory::class);
    }


}
