<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tear;
use App\Post;

class TearsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $tears= Tear::all();
        return view('traines')->with('tears',$tears);
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
      return view('add traines')->with('tears',$tears)->with('posts',$posts);
        
        //
    }

    /**return view('add ');
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'trea_title' => 'required'
        ]);
        $tear = new tear;
        $tear->tears_title = $request->input('trea_title');
        $tear->save();
        $tear->Posts()->sync($request->post,false);
        return redirect('/traines');
        //
       
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
        //
         $tears= Tear::find($id);
      return view('show traines')->with('tears',$tears);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                $posts=Post::all();
               $tears=  Tear::find($id);
      return view('edit traines')->with('tears',$tears)->with('posts',$posts);
      
     
        //
    }

    /** return view('')->with('tears',$tears);
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $this->validate($request,[
            'tears_title' => 'required'
        ]);
        $tear = Tear::find($id);
        $tear->tears_title = $request->input('tears_title');
        $tear->save();
        $tear->Posts()->sync($request->post,false);
        return redirect('/traines');
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
         $tear = Tear::find($id);
        $tear->delete();
        return redirect('/traines');
        //
    }
}
