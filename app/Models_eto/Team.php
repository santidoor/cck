<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'vacancy_positions_id'];

    protected $searchableFields = ['*'];

    public function vacancyPositions()
    {
        return $this->belongsTo(VacancyPositions::class);
    }
}
