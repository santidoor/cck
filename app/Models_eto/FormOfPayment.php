<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormOfPayment extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['buildings_id', 'name'];

    protected $searchableFields = ['*'];

    protected $table = 'form_of_payments';

    public function buildings()
    {
        return $this->belongsTo(Buildings::class);
    }
}
