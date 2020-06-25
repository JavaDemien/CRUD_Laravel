<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    public $timestamps = false;
    protected $fillable = ['manufacturer', 'model', 'year_of_issue', 'horsepower', 'transmission', 'engine_power'];
}
