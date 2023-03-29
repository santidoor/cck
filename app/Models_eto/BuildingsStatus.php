<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BuildingsStatus extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['status', 'name'];

    protected $searchableFields = ['*'];

    protected $table = 'buildings_statuses';

    public function allBuildings()
    {
        return $this->hasMany(Buildings::class);
    }
}
