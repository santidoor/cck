<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contacts extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'phone', 'email', 'developer_office_id'];

    protected $searchableFields = ['*'];

    public function developerOffice()
    {
        return $this->belongsTo(DeveloperOffice::class);
    }
}
