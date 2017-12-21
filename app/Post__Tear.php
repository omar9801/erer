<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post__Tear extends Model
{
     protected $teble = 'post_tears';
    public $primaryKey ='id';
    public $pforeignKey ='posts_idd';
    public $tforeignKey ='tears_idd';
    public $timestamps = true;
    //
    
}
