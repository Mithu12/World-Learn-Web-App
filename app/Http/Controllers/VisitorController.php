<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
use App\userProfile;

class VisitorController extends Controller
{
  function index($value='')
  {
    if (Auth::check()) {
        return redirect('home');
    }
    else {
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
      return view('visitorHome',compact('posts'));
    }
  }
}
