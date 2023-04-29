<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;
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
