<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lignePromoteur extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    protected $fillable = [
        "terrain_id",
        "promoteur_id",
        "dateDebut",
        "dateFin",
        "prix"
    ];

    public function promoteur(){
        return $this->belongsTo(promoteur::class,"promoteur_id","id");
    }
    public function terrain(){
        return $this->belongsTo(terrain::class,"terrain_id","id");
    }
}
