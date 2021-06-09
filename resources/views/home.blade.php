@extends('layouts.app')

@section('title')
    @parent Home
@endsection

@section('page_content')
    <H2>{{__('labels.home_h2')}}</H2>
    <br><br>
    <p><a href="{{ route('news-db') }}">{{__('labels.home_p_1')}} >></a></p>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
