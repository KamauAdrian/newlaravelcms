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


////the long method to create a comment
//        Comment::create([
//            'body'=>request('body'),
//            'post_id'=>$post->id
//
//        ]);
        return back();
    }
}
