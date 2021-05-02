@extends('layout')

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('title')
    @parent Admin Panel -add News
@endsection

@section('page_content')
    <br>
    <h4>Add news page</h4>
    <h4>Update news page</h4>
    <br>
    <form action="{{route('admin::saveNews')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="category">news category: </label>
            <input type="text" name="category" placeholder="news category" id="category" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">news title: </label>
            <input type="text" name="title" placeholder="news title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">news content: </label>
            <textarea name="content" placeholder="news content" id="content"  class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Add / Update</button>
    </form>
@endsection
