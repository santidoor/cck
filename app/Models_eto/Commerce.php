<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commerce extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'floor',
        'doorway',
        'apartment_number',
        'total_area',
        'price',
        'price_m2',
        'price_action',
        'img_room',
        'img_floor',
        'buildings_id',
        'zhk_object_id',
        'cardinal_directions_id',
        'apartment_status_id',
        'commerce_purpose_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'commerces';

    public function buildings()
    {
        return $this->belongsTo(Buildings::class);
    }

    public function zhkObject()
    {
        return $this->belongsTo(ZhkObject::class);
    }

    public function cardinalDirections()
    {
        return $this->belongsTo(CardinalDirections::class);
    }

    public function apartmentStatus()
    {
        return $this->belongsTo(ApartmentStatus::class);
    }

    public function commercePurpose()
    {
        return $this->belongsTo(CommercePurpose::class);
    }

    public function viewFromWindows()
    {
        return $this->belongsToMany(ViewFromWindow::class);
    }
}
