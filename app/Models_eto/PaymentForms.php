<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentForms extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['title', 'mini_text', 'text', 'img', 'icon'];

    protected $searchableFields = ['*'];

    protected $table = 'payment_forms';

    public function allBuildings()
    {
        return $this->belongsToMany(Buildings::class);
    }
}
