@extends('layout')

@section('title')
    @parent Admin Panel
@endsection

@section('page_content')
    <h2>{{__('labels.admin_h2')}}</h2>
    <br>
    <p><a href="{{ route('admin::showNews') }}">{{__('labels.admin_p_1')}}</a></p>
    <p><a href="{{ route('admin::showCategories') }}">{{__('labels.admin_p_2')}}</a></p>
@endsection
