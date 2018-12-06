<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AuthorController extends Controller
{
    public function profile($username)
    {
      $author = User::where('username',$username)->first();
      $posts = $author->posts()->approved()->published()->get();
      return view('profile',compact('author','posts'));
    }
}
