<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class UslugiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
           $this->middleware('auth',['except' =>['index','show']]);
    }

    public function index()
    {   

              return view('uslugi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
          $this->validate($request,[
              'title' => 'required',
              'body' => 'required',
              'image' => 'image|nullable|max:1999'
          ]);

          $referrer = $request->headers->get('referer');
          if($request->hasFile('image')){
              $filenameWithExt = $request->file('image')->getClientOriginalName();
              $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
              $extension = $request->file('image')->getClientOriginalExtension();
              $fileNameToStore = $filename.'_'.time().'.'.$extension;
              $path = $request->file('image')->storeAs('public/news', $fileNameToStore);
          
          }
          else
          {
            $fileNameToStore = 'noimage.jpg';
          }

          $news = new News;
          $news->slug = str_slug($request->title);
          $news->title = $request->title;
          $news->category = $request->category;
          $news->start_date = $request->start_date;
          $news->body = htmlspecialchars($request->input('body'));
          $news->image = $fileNameToStore;
          $news->save();
          
          return redirect('/news/'.$news->slug)->with('success','Post created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $News
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $slug)
    { 
   
     
           return view('uslugi.show');
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $News
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
            
      $post = News::find($id); 

      if(auth()->user()->id !=  $post->user_id){
            return redirect('/dashboard')->with('error','not');
      }
      return view('news.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $News
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request,[
              'title' => 'required',
              'body' => 'required'

          ]);
        $post =  News::find($id);
       
          if($request->hasFile('image')){
              $filenameWithExt = $request->file('image')->getClientOriginalName();
              $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
              $extension = $request->file('image')->getClientOriginalExtension();
              $fileNameToStore = $filename.'_'.time().'.'.$extension;
              $path = $request->file('image')->storeAs('public/news',$fileNameToStore);
              $post->image = $fileNameToStore;
          } 

            
          $post->slug = str_slug($request->title);
          $post->title = $request->input('title');
          $post->body = htmlspecialchars($request->input('body'));
 
          $post->save();

          return redirect('/dashboard')->with('success','Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $News
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post = News::find($id); 
        if(auth()->user()->id !== $post->user_id){
          return redirect('/news')->with('error','error');
        }
        if($post->image != 'noimage.jpg'){
          Storage::delete('public/news/'.$post->image);
        }
       $post->delete();
       return redirect('/dashboard')->with('success','Post deleted');
    }
}
