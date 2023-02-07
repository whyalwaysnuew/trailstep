<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductGallery extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'products_id',
        'url'
    ];

    /**
     * Get the URL.
     *
     * @return storage url
     */
    protected function getUrlAttribute($url)
    {
        return config('app.url') . Storage::url($url);
    }
}
