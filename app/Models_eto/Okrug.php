<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Okrug extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['value'];

    protected $searchableFields = ['*'];

    public function zhkObjects()
    {
        return $this->hasMany(ZhkObject::class);
    }
}
