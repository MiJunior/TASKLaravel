<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content'
    ];

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function tags(){
        return $this->belongsToMany( Tag::class, 'post_tags');
    }
}
