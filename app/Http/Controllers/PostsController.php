<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Str;
use Posts;
use Symfony\Contracts\Service\Attribute\Required;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=Post::all();
        return view("blog.index")->with('postes',Post::get());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'Required',
            'description' => 'Required',
            'image_path' => 'Required|mimes:jpeg,png,jpg|max:8054',
       ]
    );
            $newSlug = Str::slug($request->title,'-');
            $newimage_path=uniqid().$newSlug.$request->image_path->extension();
            $request->image_path->move(public_path('images'),$newimage_path);
  
        Post::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'slug'=>$newSlug,
            'image_path'=>$newimage_path,
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/blog/'.$newSlug)->with('message','le poste à bien été modifie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    { 
       

        return view('blog.show')->with('poste',Post::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')->with('poste',Post::where('slug',$slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
       $request->validate([
            'title' => 'Required',
            'description' => 'Required',
            'image_path' => 'Required|mimes:jpeg,png,jpg|max:8054',
       ]
    );
            $newSlug = Str::slug($request->title,'-');
            $newimage_path=uniqid().$slug.$request->image_path->extension();
            $request->image_path->move(public_path('images'),$newimage_path);
        

        Post::where('slug',$slug)
        ->update([
            'slug'=>$newSlug,
            'title'=>$request->title,
            'description'=>$request->description,
            'image_path'=>$newimage_path,
        ]);
        return redirect('/blog/'.$slug)->with('message','le poste à bien été modifie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Post::where('slug',$slug)->delete();
        return redirect('/blog')->with('message','le pote à bien été suppremé');
    }
}
