<?php

namespace App\Models;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'title',
        'price',
        // 'stock',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'int',
    ];

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class);
    }

    // public function getAllVisibleAtteributes()
    // {
    //     $this->getAttributes();
    // }

    public function getFormattedPriceAttribute()
    {
        return '$ ' . $this->attributes['price'];
    }

}
