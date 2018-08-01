@extends('layouts.master')
@section('content')

    <form method="post" action="{{route('save')}}" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title">
            </div>
        </div>
        <div class="form-group">
            <label for="body" class="col-sm-2 control-label">Body</label>
            <div class="col-sm-10">
                <textarea  class="form-control" id="body" name="body"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </div>
        @if(count($errors))
        <div class="form-group">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
            @endif
    </form>
@endsection

