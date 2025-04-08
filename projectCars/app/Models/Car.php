<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['marque', 'modele', 'prix_locations', 'disponibilite','photo'];
    public function cars(){
        return $this->hasMany(Car::class);
    }
}
