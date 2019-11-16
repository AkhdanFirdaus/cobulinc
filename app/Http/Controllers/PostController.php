<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->photos_path = public_path('/images/post');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'short_description' => 'required',
            'topic_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
        ], [
            'topic_id' => 'Topic',
            'short_description' => 'Short Description',
        ]);

        if (!is_dir($this->photos_path)) {
            mkdir($this->photos_path, 0777, true);
        }

        $photo = $request->file("image");

        $name = sha1(date('YmdHis') . str_random(30));
        $save_name = $name . '.' . $photo->getClientOriginalExtension();
        $resize_name = 'thumb_'.$name . str_random(2) . '.' . $photo->getClientOriginalExtension();
        
        Image::make($photo)
            ->resize(800, 200, function ($constraints) {
                $constraints->aspectRatio();
            })
            ->save($this->photos_path . '/' . $resize_name);
            
        $photo->move($this->photos_path, $save_name);


        $post = new Post();
        $post->title = $request->title;
        $post->image = 'images/post' . '/' . $save_name;
        $post->thumbnail = 'images/post' . '/' . $resize_name;
        $post->content = $request->content;
        $post->short_description = $request->short_description;
        $post->user_id = $request->user()->id;
        $post->topic_id = $request->topic_id;
        $post->save();
        return redirect()->back();
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
        //
    }
}
