<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tear;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=  Post::all();
        return view('courses')->with('posts',$posts);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tears=Tear::all();
       $posts= Post::all();
      return view('add courses')->with('posts',$posts)->with('tears',$tears);
        
        //
    }

    /**return view('');
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $this->validate($request,[
            'posts_title' => 'required'
        ]);
        $post = new post;
        $post->posts_title = $request->input('posts_title');
        $post->save();
        $post->Tears()->sync($request->tear,false);            

        return redirect('/courses');
        //
    }
    
    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    //$tee=Tear::all('tears_title');
      $posts= Post::find($id);
     
 
      
      //$trr[]= $posts->Tears()->$tee->tears_title->get();
            
                     
                  //  dd($posts->Tears); 
      return view('show courses')->with('posts',$posts);
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                 $tears=Tear::all();
       $posts= Post::find($id);
      return view('edit courses')->with('posts',$posts)->with('tears',$tears);

        //
    }

    /**      $posts=  Post::find($id);
      return view('edit courses')->with('posts',$posts);
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'posts_title' => 'required'
        ]);
        $post = Post::find($id);
        $post->posts_title = $request->input('posts_title');
        $post->save();
                $post->Tears()->sync($request->tear,false);  
        return redirect('/courses');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post = Post::find($id);
        $post->delete();
        return redirect('/courses');
        //
    }
}
