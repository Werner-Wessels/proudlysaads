<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $casts = [
        'promoted_at' => 'datetime',
        'promotion_expires_on' => 'datetime',
    ];


    protected $fillable = [
        'title',
        'description',
        'image_url',
        'location_id',
        'category_id',
        'price',
        'condition',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($client) {
            $client->user_id = auth()->user()->id;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(subCategory::class);
    }
}
