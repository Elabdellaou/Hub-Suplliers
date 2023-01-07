<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    public $table="products";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'references',
        'title',
        'description',
        'price',
        'image',
        'business',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'price' => 'decimal:2',
    ];

    public function commandes()
    {
        return $this->belongsToMany(Commandes::class,"commandes","product_id");
    }
    public function getRouteKeyName()
    {
        return "title";
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
}
