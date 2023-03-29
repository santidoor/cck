<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CardinalDirections extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name'];

    protected $searchableFields = ['*'];

    protected $table = 'cardinal_directions';

    public function apartments()
    {
        return $this->hasMany(Apartment::class);
    }

    public function allCommerce()
    {
        return $this->hasMany(Commerce::class);
    }
}
