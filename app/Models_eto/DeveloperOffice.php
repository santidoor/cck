<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeveloperOffice extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'adress',
        'phone',
        'email',
        'coords',
        'main_office',
        'city_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'developer_offices';

    protected $casts = [
        'main_office' => 'boolean',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function allContacts()
    {
        return $this->hasMany(Contacts::class);
    }
}
