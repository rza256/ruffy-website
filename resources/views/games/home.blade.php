@extends('layout.page')
@section('title') {{ __('home') }} @endsection
@section('content-left')
    @include('components.news')
    @include('components.friends')

    <div class="section mt-10">
	<div class="section-header">
            <b>filters</b>
	</div>
	<div class="section-body">
            <div class="news">
		
	    </div>
	</div>
    </div>
@endsection
@section('content-center')
    <div class="center-cutout-section mb-10">
        <h3>games</h3>
	<span class="float-right inline-block"><a href="#">create</a ></span>
        
    </div>
@endsection
@section('content-right')
    @include('components.recent_games')
@endsection
