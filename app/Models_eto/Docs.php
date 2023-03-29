<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Docs extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'date',
        'href',
        'zhk_object_id',
        'docs_type_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'date' => 'date',
    ];

    public function zhkObject()
    {
        return $this->belongsTo(ZhkObject::class);
    }

    public function docsType()
    {
        return $this->belongsTo(DocsType::class);
    }
}
