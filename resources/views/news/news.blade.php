@extends('layout')

@section('title')
    @parent Categories
@endsection

@section('page_content')
    <h2>News Categories</h2>
    <br>
    @foreach($categories as $id => $category)
        @php
            $url = route('news::list', ['category' => $id]);
        @endphp
            <div>
                <a href='{{$url}}'>{{$category}}</a>
            </div>
    @endforeach
@endsection
