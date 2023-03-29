<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Action extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'actions_type_id',
        'title',
        'mini_text',
        'text',
        'date_end',
        'img',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'date_end' => 'date',
    ];

    public function actionsType()
    {
        return $this->belongsTo(ActionsType::class);
    }
}
