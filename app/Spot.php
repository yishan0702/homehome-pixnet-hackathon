<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    protected $fillable = [
	'id', 'spot_name', 'start_point'
    ];
}
