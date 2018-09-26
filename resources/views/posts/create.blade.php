@extends('layouts.app')
{{--@section('content')--}}
    {{--{!! Form::open(['method'=>'POST','url' => 'save']) !!}--}}
    {{--@csrf--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::label('title','Title:',['class'=>'col-sm-2 control-label']) !!}--}}
        {{--<div class="col-sm-10">--}}
        {{--{!! Form::Text('title',null,['class'=>'form-control','placeholder'=>'Enter title']) !!}--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::label('body','Body:',['class'=>'col-sm-2 control-label']) !!}--}}
        {{--<div class="col-sm-10">--}}
            {{--{!! Form::Textarea('body',null,['class'=>'form-control','placeholder'=>'Body']) !!}--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--<div class="col-sm-offset-2 col-sm-10">--}}
            {{--{!! Form::submit('Publish',['class'=>'btn btn-primary']) !!}--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--@include('layouts.errors')--}}
    {{--{!! Form::close() !!}--}}
{{--@endsection--}}

@section('content')
    <center>
        <h3>Create Post</h3>
    </center>
<form enctype="multipart/form-data" method="post" action="{{route('save')}}" class="form-horizontal">
        @csrf


    <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder="Post title" name="title">
            </div>
    </div>


    <div class="form-group">
        <label for="body" class="col-sm-2 control-label">Body</label>
            <div class="col-sm-10">
                <textarea  class="form-control" id="body" name="body" placeholder="post"></textarea>
            </div>
    </div>


    <div class="form-group">
        <label for="" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
            <input name="img" class="btn btn-info" type="file">
        </div>
    </div>


    <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
    </div>


@include('layouts.errors')
</form>
{{--<form action="{{route('upload')}}" method="post" files="true">--}}
    {{--@csrf--}}
    {{--<div class="form-group">--}}
        {{--<label for="exampleInputFile">File input</label>--}}
        {{--<input type="file" class="btn" name="image" id="exampleInputFile">--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--<div class="col-sm-offset-2 col-sm-10">--}}
            {{--<button type="submit" class="btn btn-primary">Upload file</button>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</form>--}}
    @endsection

