@extends('layout')

@section('title')
    @parent fromDB
@endsection

@section('page_content')
    <h2>News from DB</h2>
    <br>
    <div class="news-tiles">
        @foreach($categories as $id => $category)
            @php
                $url = route('news::list', ['category' => $id + 1]);
            @endphp
            <div class="news-tile">
                <a href='{{$url}}'>{{$category}}</a>
            </div>
        @endforeach
    </div>
@endsection
