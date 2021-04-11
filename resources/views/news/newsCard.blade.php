@extends('layout')

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('title')
    @parent newsCard
@endsection

@section('page_content')
    <h2>Selected news</h2>
    <br>
    <article>{{$news}}</article>
    <br>
    <br>
@endsection
