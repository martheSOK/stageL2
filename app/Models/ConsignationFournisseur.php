<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class ConsignationFournisseur extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_fournisseur',
        'id_type',
        'quantite_Consigne',
        
    ];


    public function consignation_client()
    {
        return $this->hasMany(Type::class,"id_client");
        
    }

    public function fournisseur():BelongsTo
    {
        return $this->belongsTo(Fournisseur::class,"id_fournisseur");
    }

    public function typemballage():BelongsTo
    {
        return $this->belongsTo(TypeEmballage::class,"id_type");
    }

}
