@extends('layouts.master')
@section('content')

<h1>{{$post->title}}</h1>
{{$post->body}}

<div class="comments">
    <ul class="list-group">
        @foreach($post->comments as $comment)
        <li class="list-group-item">
           <strong>{{$comment->created_at->diffForHumans()}}:</strong> {{$comment->body}}
        </li>
    @endforeach

    </ul>
</div>
<div class="card">
    <div class="card-block">
        <form method="post" action="post/{{$post->id}}/comment">
            @csrf
            <div class="form-group">
                <textarea name="body" id="body" class="form-control" placeholder="Your Comments here"></textarea>
            </div>
            <div class="form-group">
                <input type="button" name="comment" value="Add comment" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

@endsection