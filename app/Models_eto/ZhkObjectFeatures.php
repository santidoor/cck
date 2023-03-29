<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ZhkObjectFeatures extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'text',
        'media_content_type',
        'media_content',
        'zhk_object_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'zhk_object_features';

    public function zhkObject()
    {
        return $this->belongsTo(ZhkObject::class);
    }
}
