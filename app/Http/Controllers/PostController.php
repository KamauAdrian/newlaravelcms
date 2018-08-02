<?php

namespace App\Http\Controllers;

use App\Country;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('created_at','desc')->get();
return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//            $tasks=[
//        'Visit a friend'
//        ,'Finish assignment',
//        'Play games'
//    ];
//    return view('posts',compact('tasks'));
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//        dd(request(['title','body']));
//        dd(request('title'));
//       dd($request->all());


////        create a new post
//        $post= new Post;
//        $post->title=request('title');
//        $post->body=request('body');
//        //save the new post
//        $post->save();
//        //redirect to the homepage
//        return redirect('/');

        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);



        Post::create(request(['title','body']));
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
//        $post=Post::find($id);
        return view('posts.show',compact('post'));
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
    public function contact(){
        return view('contact');

    }
//    public function newpost($id){
////       return User::find($id)->post;
////       return User::find($id)->post->title;
//       return User::find($id)->post->body;
//
//    }
//    public function getuser($id){
////
//        return Post::find($id)->user->name;
//
//    }
//    public function getposts(){
//
//         $posts=User::find(1)->posts;
//         foreach ($posts as $post){
//             echo $post->title."<br />";
//         }
//    }
//
//    public function getroles(){
////$roles=User::find(2)->roles()->orderBy('id','desc')->get();
//        //return $roles;
//       $roles=User::find(2)->roles;
//       foreach ($roles as $role){
//           return $role->name;
//       }
//
//    }


public function country($id){

$country =Country::find($id)->posts;
foreach ($country as $post){
    echo $post->title;
}


}
}
