<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = [
        "folio",
        "store_id",
        "employee_id",
        "customer_id",
        "purchase_date",
        "sent_lab_date",
        "delivery_date",
        "comments",
        "warranty"

    ];
}