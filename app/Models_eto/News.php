<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'mini_text',
        'text',
        'date_end',
        'img',
        'news_type_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'date_end' => 'date',
    ];

    public function newsType()
    {
        return $this->belongsTo(NewsType::class);
    }
}
