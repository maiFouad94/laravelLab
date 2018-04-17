<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\StorePostRequest;
use Carbon\Carbon;
class PostsController extends Controller
{
    
    public function index()
    {
                $posts = Post::paginate(1);

         $post = $posts->first();
        $createdAt = Carbon::parse($post->created_at)->format('M d Y');
         
       

        return view('posts.index',[

            'posts' => $posts
        ]);
    }

    public function create()
    {
        $users = User::all();

        return view('posts.create',[
            'users' => $users
        ]);
    }

    public function store(StorePostRequest $request)
    {
        // dd($request->all());
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id
        ]);
        
       return redirect(route('posts.index')); 
    }

    public function show($id)
    {    $post = Post::find($id);

        return view('posts.show',[
            'post' => $post
            ]); 
      
    


}

    public function update($id,StorePostRequest $request){
        //$post = Post::find($id);
       

        Post::find($id)->update(['title'=>$request->title,
            'description' => $request->description,
            'user_id' => $request->user_id]);
        return redirect('/posts');

}
    public function edit($id){
         $post = Post::find($id);
         $users = User::all();

         return view('posts.update',[
            'post' => $post,
            'users' => $users
        ]);
}

public function destroy($id){
             $post = Post::find($id);
             $post->delete();
                     return redirect('/posts');

}

}