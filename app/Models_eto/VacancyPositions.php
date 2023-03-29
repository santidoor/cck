<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VacancyPositions extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'vacancy_directions_id'];

    protected $searchableFields = ['*'];

    protected $table = 'vacancy_positions';

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }

    public function vacancyDirections()
    {
        return $this->belongsTo(VacancyDirections::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
