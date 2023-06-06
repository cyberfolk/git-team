<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    protected $fillable = [
        "name",
        "surname",
        "birth_date",
        "record_company",
        "genre"
    ];

    use HasFactory;
}
