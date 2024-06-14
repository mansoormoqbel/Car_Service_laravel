<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $fillable = [
        'supplierName',
        'phone',
        'address',
        'email'
    ];
    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }
    
}
