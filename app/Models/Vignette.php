<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vignette extends Model
{
    //protected $table = "vignettes";   //Ez csak akkor kell ha automatikusan nem ismeri fel

    public $timestamps = true;

    protected $fillable = [
        "vehicle_id",
        "type",
        "category",
        "region",
        "year",
        "valid_from",
        "valid_to"
    ];

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }
}
