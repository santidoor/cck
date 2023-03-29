<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MainPageSlider extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['title', 'text', 'img', 'url'];

    protected $searchableFields = ['*'];

    protected $table = 'main_page_sliders';
}
