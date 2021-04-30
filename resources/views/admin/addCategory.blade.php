@extends('layout')

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('title')
    @parent Admin Panel -add category
@endsection

@php
    dump(Request::path());
@endphp

@section('page_content')
    <br>
    <h4>Add category page</h4>
    <h4>Update category page</h4>
    <br>
    <form action="{{route('admin::save')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">category name: </label>
            <input type="text" name="title" value="{{}}" placeholder="category name" id="title" class="form-control">
        </div>
        <button type="submit" class="btn btn-outline-primary">Add / Update</button>
    </form>
@endsection

<p>admin add category</p>
