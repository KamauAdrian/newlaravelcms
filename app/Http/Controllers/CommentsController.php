<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //
    public function store(post $post){

    $this->validate(request(),['body'=>'required|min:2']);
////method to create a comment
$post->addcoment(request('body'));


//the long method to create a comment
//        $post = new Post();
//        $post_id = $post->find('post_id');
//        $comment = new Comment();
//        $comment->post_id=$post_id;
//        $comment->body=request('body');
//        $comment->user_id=auth()->user()->id;
//
//        $comment->save();
//        Comment::create([
//            'body'=>request('body'),
//            'post_id'=>$post->id,
//            'user_id'=>
//
//        ]);
        return back();
    }
}
