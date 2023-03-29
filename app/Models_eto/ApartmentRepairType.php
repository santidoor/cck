<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ApartmentRepairType extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['img', 'name'];

    protected $searchableFields = ['*'];

    protected $table = 'apartment_repair_types';

    public function apartments()
    {
        return $this->hasMany(Apartment::class);
    }
}
