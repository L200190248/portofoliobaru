<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // App\Models\Article.php

    protected $fillable = [
        'title',
        'content',
        'author',
        'article_type_id',
        'image',
    ];


    // Relasi ke ArticleType
    public function articleType()
    {
        return $this->belongsTo(ArticleType::class, 'article_type_id');
    }
    //Relasi ke categories
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
