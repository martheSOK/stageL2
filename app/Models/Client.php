<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'contact',
        'adresse',
    ];
    public function consignation_client()
    {
        return $this->hasMany(Type::class,"id_client");
        
    }
    protected $primaryKey = "id_client";

}
