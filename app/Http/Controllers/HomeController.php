<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\userProfile;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();

        foreach ($posts as $post)
        {
            $userData = userProfile::where('user_id',$post->user_id)->select('designation','image')->first();
            $post->designation=$userData->designation;
            $post->image=$userData->image;
            $userData = User::where('id',$post->user_id)->select('name')->first();
            $post->name=$userData->name;
        }
//        foreach ($posts as $post)
//        print_r($post);
        return view('home',compact('posts'));
    }
    public function test()
    {
//       echo 'in test';
//        return view('home');
    }
    
}
