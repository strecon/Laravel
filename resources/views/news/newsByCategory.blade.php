@extends('layout')

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
        <article>
            <a href='{{$url}}'>{{$card}}</a>
        </article>
        <br>
    @endforeach
@endsection
