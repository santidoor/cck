<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ZhkObjectConstructionProgress extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'date',
        'media_content_type',
        'media_content',
        'zhk_object_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'zhk_object_construction_progresses';

    protected $casts = [
        'date' => 'date',
    ];

    public function zhkObject()
    {
        return $this->belongsTo(ZhkObject::class);
    }
}
