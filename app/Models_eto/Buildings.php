<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buildings extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'zhk_object_id',
        'buildings_status_id',
        'liter_num',
        'floors',
        'ceiling_height',
        'passenger_elevators',
        'freight_elevators',
        'start_date',
        'end_date',
        'key_date',
        'gallery',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'key_date' => 'date',
    ];

    public function zhkObject()
    {
        return $this->belongsTo(ZhkObject::class);
    }

    public function apartments()
    {
        return $this->hasMany(Apartment::class);
    }

    public function buildingsStatus()
    {
        return $this->belongsTo(BuildingsStatus::class);
    }

    public function formOfPayments()
    {
        return $this->hasMany(FormOfPayment::class);
    }

    public function typeOfParkings()
    {
        return $this->hasMany(TypeOfParking::class);
    }

    public function buildingMaterial()
    {
        return $this->hasOne(BuildingMaterial::class);
    }

    public function allCommerce()
    {
        return $this->hasMany(Commerce::class);
    }

    public function allPaymentForms()
    {
        return $this->belongsToMany(PaymentForms::class);
    }
}
