@extends('layout.page')
@section('title') {{ __('home') }} @endsection
@section('content-left')
    @include('components.news')
    @include('components.friends')
@endsection
@section('content-center')
    <div class="center-cutout-section mb-10">
        <h3>create a {{ $assetType->id() }} <img src="{{ asset('/images/silk/controller.png') }}" class="icon silk no-filter"> </h3>

	{{-- "items" class is standin for game/catalog. reuse code --}}
	<div class="cutout mt-10">
	    <form class="full-form" action="{{ route('ruffy.develop.create', ['type' => $assetType->id() ]) }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="overflow">
		    <b class="inline-block mt-3">{{ $assetType->id() }} title</b>
		    <input class="float-right" type="text" name="title" placeholder="crossroads">
		</div>
		<div class="overflow mt-5">
		    <div class="input-detailed">
			<b class="inline-block mt-3">description</b><br>
			<span class="caption">not required, max 500 characters</span>
		    </div>
		    <textarea class="float-right" name="description" placeholder="description"></textarea>
		</div>
		<div class="overflow mt-5">
		    <b class="inline-block mt-3">file</b>
		    <input class="float-right" type="file" name="file">
		</div>

		@if ($assetType == \App\Enums\AssetType::Place)
		    <div class="overflow mt-5">
			<b class="inline-block mt-3">maximum players</b>
			<input class="float-right" type="number" name="maxplayers" placeholder="number" min="0">
		    </div>

		    <div class="overflow mt-5">
			<b class="inline-block mt-3">chat style</b>
			<select name="chatstyle" class="float-right">
			    <option value="0">classic</option>
			    <option value="1">bubble</option>
			    <option value="2">classic and bubble</option>
			</select>
		    </div>
		@endif
		    
		<div class="overflow mt-10 pt-0">
		    <button class="button float-right">register</button>
		</div>
	    </form>
	</div>
    </div>
@endsection
@section('content-right')
    @include('components.recent_games')
@endsection
