@extends('layout')

@section('title')
    @parent Categories
@endsection

@section('page_content')
    <h2>News Categories</h2>
    <br>
    <div class="news-tiles">
        @foreach($categories as $category)
            @php
                $url = route('news::list', ['category' => $category->id]);
            @endphp
            <div class="news-tile">
                <a href='{{$url}}'>{{$category->name}}</a>
            </div>
        @endforeach
    </div>
@endsection
