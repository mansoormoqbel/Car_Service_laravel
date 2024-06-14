<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $table = 'inventories';
    protected $fillable = [
        'itemName',
        'quantity',
        'cost',
        'image',
        'supplierID'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class,'supplierID');
    }
   
}
