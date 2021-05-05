@extends('layout')

@section('title')
    @parent About
@endsection

@section('page_content')
    <h2>{{__("labels.about_h2")}}</h2>
    <br>
    <h6>{{__('labels.about_h6')}}</h6>
    <br><br>
    <p>{{__('labels.about_phone')}}: +7 800 500-0123</p>
    <p>{{__('labels.about_email')}}: info@hotnews.com</p>
    <p>{{__('labels.about_map')}}</p>
@endsection
