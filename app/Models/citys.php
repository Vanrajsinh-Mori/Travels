<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citys extends Model
{
    use HasFactory;
    protected $table = "citys";
    protected $primaryKey = 'city_id';

}
