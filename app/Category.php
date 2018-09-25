<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Class Category
 * @package App
 */
class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image'
    ];

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
}
