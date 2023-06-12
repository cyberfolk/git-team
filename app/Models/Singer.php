<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

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
    protected $fillable = ['name', 'surname', 'birth_date', 'genre', 'record_company', 'genre_id'];

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }
    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }
    
}
