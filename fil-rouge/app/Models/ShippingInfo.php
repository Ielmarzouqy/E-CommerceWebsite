<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingInfo extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','phone_number','city_name','postal_code'];

    public function users(){
        return $this->hasMany(User::class);
    }
    // public function cart(){
    //     return $this->belongsTo(Carts::class);
    // }
}
