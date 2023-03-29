<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apartment extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'buildings_id',
        'apartment_count_rooms_id',
        'apartment_glazing_type_id',
        'apartment_repair_type_id',
        'apartment_balcony_loggia_type_id',
        'cardinal_directions_id',
        'apartment_type_id',
        'windows_overlook_id',
        'apartment_status_id',
        'floors',
        'doorway',
        'apartment_number',
        'total_area',
        'kitchen_area',
        'living_area',
        'count_separate_su',
        'count_joint_su',
        'area_su',
        'price',
        'price_m2',
        'price_action',
        'img_room',
        'img_floor',
        'img_furniture',
        '3d_tour',
        '3d_apartment',
        'dressing_room',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'dressing_room' => 'boolean',
    ];

    public function buildings()
    {
        return $this->belongsTo(Buildings::class);
    }

    public function apartmentCountRooms()
    {
        return $this->belongsTo(ApartmentCountRooms::class);
    }

    public function apartmentGlazingType()
    {
        return $this->belongsTo(ApartmentGlazingType::class);
    }

    public function apartmentRepairType()
    {
        return $this->belongsTo(ApartmentRepairType::class);
    }

    public function apartmentBalconyLoggiaType()
    {
        return $this->belongsTo(ApartmentBalconyLoggiaType::class);
    }

    public function cardinalDirections()
    {
        return $this->belongsTo(CardinalDirections::class);
    }

    public function apartmentType()
    {
        return $this->belongsTo(ApartmentType::class);
    }

    public function windowsOverlook()
    {
        return $this->belongsTo(WindowsOverlook::class);
    }

    public function apartmentStatus()
    {
        return $this->belongsTo(ApartmentStatus::class);
    }

    public function viewFromWindows()
    {
        return $this->belongsToMany(ViewFromWindow::class);
    }
}
