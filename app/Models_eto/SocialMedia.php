<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialMedia extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['url'];

    protected $searchableFields = ['*'];

    protected $table = 'social_medias';

    public function socialMediaTypes()
    {
        return $this->hasMany(SocialMediaType::class);
    }

    public function developers()
    {
        return $this->belongsToMany(Developer::class);
    }
}
