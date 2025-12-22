@extends('layout.page')
@section('title') {{ __('home') }} @endsection
@section('content-left')
    <div class="section mb-10">
	<div class="section-header">
            <b>filters</b>
	</div>
	<div class="section-body">
            <div class="news">
		
	    </div>
	</div>
    </div>
    @include('components.news')
    @include('components.friends')
@endsection
@section('content-center')
    <div class="center-cutout-section mb-10">
        <h3>develop</h3>
	<span class="float-right inline-block"><a href="{{ route('ruffy.develop.create', ['type' => 'game']) }}">create</a ></span>

	{{-- "items" class is standin for game/catalog. reuse code --}}
	<div class="items mt-10">
	    <div class="item">
		<a href="#" class="div-link"></a>
		<img class="item-thumbnail game-thumbnail" src="{{ asset('/images/nooby.png') }}">
		
		<div class="item-info">
		    <b>Crossroads</b><br>
		    <span class="caption"><b>0</b> players</span><br>
		    <span class="caption"><img src="{{ asset('/images/silk/user.png') }}" class="icon silk"> created by <b>emi</b> </span>
		</div>
	    </div>
	</div>
    </div>
@endsection
@section('content-right')
    @include('components.recent_games')
@endsection
