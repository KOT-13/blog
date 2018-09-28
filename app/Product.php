<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Class Product
 * @package App
 */
class Product extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'price',
        'image'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return null|string
     */
    public function getImagePathAttribute():? string
    {
        if ($this->image) {
            return Storage::url($this->image);
        }
        return null;
    }

    /**
     * @param $query
     * @param $s
     * @return mixed
     */
    public function scopeSearch($query, $s)
    {
        return $query->where('title', 'like', '%' .$s. '%')
            ->orWhere('description', 'like', '%' .$s. '%');
    }
}
