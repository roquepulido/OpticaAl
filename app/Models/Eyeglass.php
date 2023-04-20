<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eyeglass extends Model
{
    use HasFactory;
    protected $fillable = [
        "frame_id",
        "left_lent_id",
        "rigth_lent_id",
        "treatment_id"
    ];
}
