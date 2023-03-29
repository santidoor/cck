<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialProject extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'social_project_type_id'];

    protected $searchableFields = ['*'];

    protected $table = 'social_projects';

    public function socialProjectType()
    {
        return $this->belongsTo(SocialProjectType::class);
    }
}
