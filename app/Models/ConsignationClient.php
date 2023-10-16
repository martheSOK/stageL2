<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class consignationClients extends Model
{
    use HasFactory;
    protected $fillable = [
        'etat',
        'quantite_consigne',
        'quantite_retitue',
        
    ];
    public function personnels():BelongsTo
    {
        return $this->belongsTo(Type::class,"id_personnel");
    }

    public function depot_emb_four():BelongsTo
    {
        return $this->belongsTo(Type::class,"id_depotembalfourni");
    }

    public function client():BelongsTo
    {
        return $this->belongsTo(Type::class,"id_client");
    }

    public function fournisseur():BelongsTo
    {
        return $this->belongsTo(Type::class,"id_fournisseur");
    }



}
