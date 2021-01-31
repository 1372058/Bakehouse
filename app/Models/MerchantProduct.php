<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MerchantProduct extends Model
{
    use SoftDeletes;

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function merchant()
    {
        return $this->belongsTo('App\Models\Merchant');
    }

    protected $table = 'merchant_product';
    protected $fillable = [
        'merchant_name',
        'product_name',
        'price',
        'product_id',
        'merchant_id',
        'created_at',
        'updated_at',
        'deleted_at' 
    ];
}
