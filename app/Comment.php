<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * @package App
 */
class Comment extends Model
{
    protected $fillable = [
        'body',
        'user_id',
        'post_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
