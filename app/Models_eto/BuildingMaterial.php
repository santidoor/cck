<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BuildingMaterial extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'buildings_id'];

    protected $searchableFields = ['*'];

    protected $table = 'building_materials';

    public function buildings()
    {
        return $this->belongsTo(Buildings::class);
    }
}
