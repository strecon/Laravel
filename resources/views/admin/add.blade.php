@extends('layout')

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('title')
    @parent Admin Panel -add
@endsection

@section('page_content')
    <h2>Admin Panel</h2>
    <br>
    <p>Add news page</p>
    <br>
    <form action="{{route('admin::save')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="category">Add news category: </label>
            <input type="text" name="category" placeholder="Add news category" id="category" class="form-control">
        </div>
        <div class="form-group">
            <label for="title">Add news title: </label>
            <input type="text" name="title" placeholder="Add news title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Add news content: </label>
            <textarea name="content" placeholder="Add news content" id="content"  class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Add</button>
    </form>
@endsection
