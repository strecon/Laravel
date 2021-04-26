@extends('layout')

@section('title')
    @parent Home
@endsection

@section('page_content')
    <H2>Welcom to Home Page!</H2>
    <br><br>
    <p><a href="{{ route('news-db') }}">News from DB >></a></p>
@endsection
