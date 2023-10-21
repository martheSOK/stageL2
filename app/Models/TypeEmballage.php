<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeEmballage extends Model
{
    use HasFactory;
    protected $fillable = [

        'libelle',
    
        
    ];
    protected $primaryKey = "id_type";

    public function depot_eballage_fournis()
    {
        return $this->hasMany(Type::class,"id_type");
        
    }

    public function consignation_fourni()
    {
        return $this->hasMany(ConsignationFournisseur::class,"id_type");
        
    }


}
