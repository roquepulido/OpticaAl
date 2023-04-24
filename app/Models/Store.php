<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "street",
        "number",
        "suburb",
        "city",
        "state",
        "phone",
        "email",
        'postcode',
        'stateAbbr'
    ];
}
