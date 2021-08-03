<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class graficoKPI1 extends Model {
    protected $table = 'graficoKPI1';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;


    // Realazione One-To-One con Category
   // public function prodCat() {
        //attento etrarre relazione one to one slide 37
    //    return $this->hasOne(Category::class, 'catId', 'catId');
    //}

}
