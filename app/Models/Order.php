<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente',
        'cedula',
        'tipo',
        'estatus',
        'fecha_entrega',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')->withPivot('quantity')->withTimestamps();
    }

    public function ingreso()
    {
        return $this->hasOne(income::class);
    }
}
