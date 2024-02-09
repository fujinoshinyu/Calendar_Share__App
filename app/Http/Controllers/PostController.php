<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\User;
use App\Models\Event;

class PostController extends Controller
{
    public function index(User $user) {
return view('posts/index')->with(['users' => $user->getPaginateByLimit(15)]);//getPaginateByLimit()はPost.phpで定義したメソッドです。
}

public function show(Users $user) {
return view('posts/show')->with(['post' => $post]); //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}
public function create(Category $category) 
{
return view('posts/create')->with(['categories' => $category->get()]); 
    
}
public function store(Post $post, PostRequest $request) {
$input = $request['post']; $post->fill($input)->save();
return redirect('/posts/' . $post->id);
}
public function edit(Post $post) {
return view('posts/edit')->with(['post' => $post]); 
    
}
public function update(PostRequest $request, Post $post) {
$input_post = $request['post']; $post->fill($input_post)->save();
return redirect('/posts/' . $post->id); 
    
}
public function delete(Post $post) {
      $post->delete();
return redirect('/'); 
    
}


}