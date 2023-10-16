<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depot extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'designation',
        
    ];

    protected $primaryKey = "id_depot";
    
    public function depot_emballage_fournis()
    {
        return $this->hasMany(Type::class,'id_depot');
        
    }

    public function personnels()
    {
        return $this->hasMany(Type::class,"id_depot");
        
    }
    
}
