<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'author_id',
        'publish_year',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
