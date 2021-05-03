@extends('layout')

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('title')
    @parent Admin Panel -add News
@endsection

@section('page_content')
    <br>
    <h4>Add news page / Update news page</h4>
    <br>
    <span><a href="{{route('admin::panel')}}">Admin panel ></a><a href="{{route('admin::showNews')}}">  news list</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <br>
{{--    <br>--}}
{{--    @include('showErrors')--}}
    <form action="{{route('admin::saveNews')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="category"><span style="color: darkred">*</span> news category: </label>
            <input type="text" name="category" placeholder="news category" id="category" class="form-control">
            @error('category')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="title"><span style="color: darkred">*</span>news title: </label>
            <input type="text" name="title" placeholder="news title" id="title" class="form-control">
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
{{--        <div class="input-group mb-3">--}}
{{--            <input type="file" class="form-control" id="inputGroupFile02">--}}
{{--            <label class="input-group-text" for="inputGroupFile02">attach</label>--}}
{{--        </div>--}}
        <div class="form-group">
            <label for="content"><span style="color: darkred">*</span> news content: </label>
            <textarea name="content" placeholder="news content" id="content"  class="form-control"></textarea>
            @error('content')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-primary">Add / Update</button>
    </form>
@endsection
