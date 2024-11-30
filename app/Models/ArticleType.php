<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // Sesuaikan dengan kolom di tabel

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
