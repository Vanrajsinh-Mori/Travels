<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hostels extends Model
{
    use HasFactory;

    protected $table = "hotels";
    protected $id = "id";
}
