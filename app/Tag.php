<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use PDOException;

class Tag extends Model
{
    protected $fillable = [
      'tag'
    ];

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function posts(){
        return $this->belongsToMany('App\Post', 'post_tags');
    }

    /**
     * @param array $data
     * @param Post $post
     * @return Tag|string
     */
    public function create(array $data, Post $post){
        try{
            DB::transaction(function() use ($post, $data) {
                foreach ($data as $value){
                    $post->tags()->create(['tag' => $value]);
                }
            });
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }
}
