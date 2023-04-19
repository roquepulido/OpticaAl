<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "last_name",
        "phone",
        "email",
        "street",
        "number",
        "suburb",
        "city",
        "state",
        'postcode',
        'stateAbbr'

    ];
}
