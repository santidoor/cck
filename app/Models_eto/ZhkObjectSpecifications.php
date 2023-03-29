<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ZhkObjectSpecifications extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['title', 'sub_title', 'zhk_object_id'];

    protected $searchableFields = ['*'];

    protected $table = 'zhk_object_specifications';

    public function zhkObject()
    {
        return $this->belongsTo(ZhkObject::class);
    }
}
