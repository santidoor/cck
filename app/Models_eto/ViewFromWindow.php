<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ViewFromWindow extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name'];

    protected $searchableFields = ['*'];

    protected $table = 'view_from_windows';

    public function apartments()
    {
        return $this->belongsToMany(Apartment::class);
    }

    public function allCommerce()
    {
        return $this->belongsToMany(Commerce::class);
    }
}
