<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $teble = 'posts';
    public $primaryKey ='posts_id';
    public $string ='posts_title';
    public $timestamps = true;
    
     public function Tears(){
        return $this->belongsToMany('App\Post_Tear','post_tears','tears_idd','posts_idd');
     }
       /*  
      public function Tears($id){
        return $this->belongsToMany('App\Post_Tear','post_tears','tears_idd','posts_idd');
     }
 
     public function ers(){
        return this->belongsTo('App\Tear');
     }
*/    
    //
}
