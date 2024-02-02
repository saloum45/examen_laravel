<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class terrain extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        "superficie",
        "description",
        "zone_id"
    ];

    public function lignePromoteur(){
        return $this->hasMany(lignePromoteur::class);
    }
    public function zone(){
        return $this->belongsTo(zone::class);
    }
}
