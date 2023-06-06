<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $fillable=['name','national','phone','place_id'];
    public function place()
    {
        return $this->belongsTo(Place::class);

    }
}
