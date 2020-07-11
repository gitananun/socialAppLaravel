<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $table = "tweets";

    protected $fillable = [
        'user_id', 'body'
    ];

    public function getForeignKey()
    {
        return 'id';
    }

    public function user(){
       return $this->belongsTo(User::class);
    }
}
