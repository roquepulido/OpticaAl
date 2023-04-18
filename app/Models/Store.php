<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = [
        "street",
        "number",
        "suburb",
        "city",
        "state",
        "phone",
        "email",
    ];
}
