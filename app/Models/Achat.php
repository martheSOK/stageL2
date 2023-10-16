<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantite_achat',
        'quantite_retourne',
        'date',
    ];
    public function depot_emballage_fournis():BelongsTo
    {
        return $this->belongsTo(Type::class,"id_depotembalfourni");
    }
    
}
