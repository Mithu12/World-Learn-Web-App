<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\userProfile;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    static function ownPosts()
    {
        $id= auth()->user()->id;
        $posts = Post::where('user_id',$id)->get();
        return $posts;
    }
    static function makePost(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:50',
            'description' =>'required',
        ]);
        $data['user_id'] = auth()->user()->id;
        Post::insert($data);
        return redirect(route('viewProfile'));
    }
    static function newPost()
    {
//        echo $id= auth()->user()->id;
        return view('makePost');
    }
}
