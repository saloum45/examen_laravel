<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promoteur extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        "nom",
        "tel",
        "email",
        "bp"
    ];

    public function lignePromoteur(){
        return $this->hasMany(lignePromoteur::class);
    }
}
