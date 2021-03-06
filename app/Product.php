<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    protected $fillable = ['name', 'unit_price'];

    public function invoices(): BelongsToMany
    {
        return $this->belongsToMany(Invoice::class)
            ->withPivot(
                'price',
                'quantity');
    }

    public function scopeSearchFor($query, $type, $search)
    {
        if (($type) && ($search)) {
            return $query->where($type, 'like', "%$search%");
        }
    }
}

