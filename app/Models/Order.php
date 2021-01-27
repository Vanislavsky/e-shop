<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     use HasFactory;

    const productPath = 'App\Models\Product';

    public function products() {
        return $this->belongsToMany(self::productPath)->withPivot('count')->withTimestamps();
    }

    public function calculate() {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPrice($product->pivot->count);
        }

        return $sum;
    }
}
