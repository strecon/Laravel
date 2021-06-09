@extends('layout')

@section('title')
    @parent Admin Panel
@endsection

@section('page_content')
    <h2>Admin Panel</h2>
    <br>
    <p><a href="{{ route('admin::showNews') }}">News list</a></p>
    <p><a href="{{ route('admin::showCategories') }}">Categories list</a></p>
@endsection
