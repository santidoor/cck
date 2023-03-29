<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeOfParking extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'buildings_id'];

    protected $searchableFields = ['*'];

    protected $table = 'type_of_parkings';

    public function buildings()
    {
        return $this->belongsTo(Buildings::class);
    }
}
