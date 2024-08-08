<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatments extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id',
        'treatment_name',
        'treatment_start_date',
        'description',
        'status'
    ];
}
