@extends('layout')

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('title')
    @parent Admin Panel -add category
@endsection

@php
  dump(Request::input());
    dump(Request::method());
@endphp

@section('page_content')
    <br>
    <h4>Add category page / Update category page</h4>
    <br>
    <span><a href="{{route('admin::panel')}}">Admin panel ></a><a href="{{route('admin::showCategories')}}">  categories list</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <br><br>
    <form action="{{route('admin::saveCategory')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">category name: </label>
            <input type="text" name="title" value="{{}}" placeholder="category name" id="title" class="form-control">
        </div>
        <button type="submit" class="btn btn-outline-primary">Add / Update</button>
    </form>
@endsection
