<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchCache extends Model
{
    protected $fillable = ['query', 'results'];
}
