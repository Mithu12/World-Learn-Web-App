<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userProfile;
use App\User;
use Image;
use Illuminate\Support\Facades\Hash;
//use Intervention\Image\Image;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  function addProfile()
  {
    $user = new userProfile;
    $user->user_id = auth()->user()->id;
    $user->save();
    return redirect('home');
  }
  function viewProfile()
  {
    $userId= auth()->user()->id;
    $user = new userProfile;
    $userDta = $user::where('user_id',$userId)->first();

    $posts = PostsController::ownPosts();
//    print_r($posts);
    // echo $userDta->designation;

    return view('userProfile', compact('userDta','posts'));
  }
  function editProfile()
  {

      $userId= auth()->user()->id;
      $user = new userProfile;
      $userData = $user::where('user_id',$userId)->first();
      return view('editProfile', compact('userData'));
  }
  function updateProfile(Request $request)
  {
    print_r($request->all());
//      $flight = new Flight;
      $userId= auth()->user()->id;
      $user = new userProfile;
      $user = $user::where('user_id',$userId)->first();
//      print_r($user);

      if($request->userName!=null)
          UsersController::updateUserName($userId,$request->userName);
      if($request->gender!=null)
          $user->gender = $request->gender;
      if($request->designation!=null)
          $user->designation = $request->designation;
      if($request->address!=null)
          $user->address = $request->address;
      if($request->country!=null)
          $user->country = $request->country;
      if($request->hasFile('dp'))
      {
          $image = $request->file('dp');
          $imageName = $userId.'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(180,180)->save(base_path('public/images/profileDp/'.$imageName));
          $user->image = $imageName;
//          echo $user->image;
      }

//
      $user->save();
      return back()->with('err','Profile Updated');
  }
  function updateUserName($id,$name){
      $user = User::where('id',$id)->first();
      $user->name=$name;
      $user->save();
  }
  function changePass(Request $request){
      $id= auth()->user()->id;
      $user = User::where('id',$id)->first();
      $p = $user->password;
      $oldPassword=$request->oldPassword;
      $newPassword=$request->newPassword;
      $repeatPassword=$request->repeatPassword;
      if(Hash::check($oldPassword,$p))
      {
          if($oldPassword===$newPassword)
          {
              return back()->with('err','New password can not be old password');
          }
          if($repeatPassword!==$newPassword)
          {
              return back()->with('err','new Password and repeat password did not match');
          }
          $user->password=Hash::make($newPassword);
          $user->save();
          return back()->with('err','Password updated');
      }
      return back()->with('err','Old Password did not match');
//          echo 'yoyo';
////      else
//          echo 'nono';
  }
  function test(){
      $id= auth()->user()->id;
      $user = User::where('id',$id)->first();
      $p = $user->password;
      $x = Hash::check('12345678',$p);
//      oldPassword
//newPassword
//repeatPassword
      if($x)
          echo 'yoyo';
      else
          echo 'nono';
  }
}
