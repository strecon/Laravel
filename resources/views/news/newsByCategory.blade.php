@extends('layout')

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('title')
    @parent {{$category}} Category
@endsection

@section('page_content')
    <h2>News List by Category</h2>
    <br>
    @foreach($list as $id => $card)
        @php
            $url = route('news::card', ['id' => $id]);
        @endphp
            <div>
                <a href='{{$url}}'>{{$card}}</a>
            </div>
        <br>
    @endforeach
@endsection
