@extends('layouts.app')
@section('content')
    <form action="{{route('save')}}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="submit" name="submit">
    </form>
@endsection