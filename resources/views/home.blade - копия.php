@extends('layout')

@section('title')
    @parent Home
@endsection

@section('page_content')
    <H2>{{__('labels.home_h2')}}</H2>
    <br><br>
    <p><a href="{{ route('news-db') }}">{{__('labels.home_p_1')}} >></a></p>
@endsection
