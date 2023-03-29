<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ZhkObject extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'slug',
        'street',
        'coords',
        'gallery',
        'intro_title',
        'intro_text',
        'meta_title',
        'meta_discription',
        'intro_video',
        'aeroponarama',
        'popular',
        'genplan_day',
        'genplan_night',
        'city_id',
        'district_id',
        'okrug_id',
        'klasses_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'zhk_objects';

    protected $casts = [
        'popular' => 'boolean',
    ];

    public function allZhkObjectFeatures()
    {
        return $this->hasMany(ZhkObjectFeatures::class);
    }

    public function allBuildings()
    {
        return $this->hasMany(Buildings::class);
    }

    public function zhkObjectConstructionProgresses()
    {
        return $this->hasMany(ZhkObjectConstructionProgress::class);
    }

    public function allZhkObjectSpecifications()
    {
        return $this->hasMany(ZhkObjectSpecifications::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function allDocs()
    {
        return $this->hasMany(Docs::class);
    }

    public function allCommerce()
    {
        return $this->hasMany(Commerce::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function okrug()
    {
        return $this->belongsTo(Okrug::class);
    }

    public function klasses()
    {
        return $this->belongsTo(Klasses::class);
    }
}
