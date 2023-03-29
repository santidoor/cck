<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialMediaType extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['social_media_id', 'name', 'logo'];

    protected $searchableFields = ['*'];

    protected $table = 'social_media_types';

    public function socialMedia()
    {
        return $this->belongsTo(SocialMedia::class);
    }
}
