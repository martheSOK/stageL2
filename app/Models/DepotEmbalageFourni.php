<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class DepotEmbalageFourni extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_depot',
        'id_type',
        'id_fournisseur',
        'quantite_stock',
        
    ];
    protected $table="depot_emballage_fournis";

    protected $primaryKey = "id_depotembalfourni";

    
    public function achats()
    {
        return $this->hasMany(Type::class,"id_depotembalfourni");
        
    }


    public function consignation_fournisseur()
    {
        return $this->hasMany(ConsignationFournisseur::class,"id_depotembalfourni");
        
    }

    public function mouvements()
    {
        return $this->hasMany(DepotEmbalageFourni::class,"id_depotembalfourni");
        
    }


    public function type_emballage():BelongsTo
    {
        return $this->belongsTo(TypeEmballage::class,"id_type");
    }

    public function fournisseur():BelongsTo
    {
        return $this->belongsTo(Fournisseur::class,"id_fournisseur");
    }

    public function depot():BelongsTo
    {
        return $this->belongsTo(Depot::class,"id_depot");
    }


}
