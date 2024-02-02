<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zone extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $fillable = [
        "nomz",
        "localisation",
        "description",
        "region_id"
    ];

    public function region(){
        return $this->belongsTo(region::class);
    }

    public function terrain(){
        return $this->hasMany(terrain::class);
    }
}
