<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //protected $table = "vehicles"; //Ez csak akkor kell ha automatikusan nem ismeri fel

    public $timestamps = true;

    protected $fillable = [
        "country_code",
        "plate_number"
    ];

    public function vignettes()
    {
        return $this->hasMany(Vignette::class);
    }
}
