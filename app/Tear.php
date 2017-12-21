<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tear extends Model
{
    protected $teble = 'tears';
    public $primaryKey ='tears_id';
    public $string  ='tears_title';
    public $timestamps = true;
    //
             public function Posts(){
        return $this->belongsToMany('App\Post_Tear','post_tears','tears_idd','posts_idd');
     }
     
     function pots(){
        return $this->hsaMany('App\Post');
     }
}
