@extends('layout.page')
{{-- Justification: Emacs doesn't like it when I don't close section. So I have to do this --}}
@section('title') {{ __('welcome') }} @endsection
@section('content-left')
    @include('components.news')
@endsection
@section('content-center')
    <div class="center-cutout-section">
	<h3>What is <b>Ruffy?</b></h3><br>
	<b>Ruffy</b> is an industrial petroleum refinery.<br>

	<div class="columns">
	    <div class="column-1 pr-5">
		<h3 class="mt-10 mb-10">Register</h3>
		
		<div class="cutout">
		    <form action="{{ route('ruffy.auth.register') }}" method="POST">
			@csrf
			<div class="overflow">
			    <b class="inline-block mt-3">Username</b>
			    <input class="float-right" type="text" name="username" placeholder="john">
			</div>
			<div class="overflow mt-5">
			    <b class="inline-block mt-3">Password</b>
			    <input class="float-right" type="password" name="password" placeholder="Password">
			</div>
			<div class="overflow mt-5">
			    <b class="inline-block mt-3">Ticket</b>
			    <input class="float-right" type="password" name="ticket" placeholder="Ticket">
			</div>
			
			<div class="overflow mt-10 pt-0">
			    <button class="button float-right">register</button>
			</div>
		    </form>
		</div>
	    </div>
	    <div class="column-1">
		<h3 class="mt-10 mb-10">Login</h3>
		
		<div class="cutout">
		    <form action="{{ route('ruffy.auth.login') }}" method="POST">
			@csrf
			<div class="overflow">
			    <b class="inline-block mt-3">Username</b>
			    <input class="float-right" type="text" name="username" placeholder="john">
			</div>
			<div class="overflow mt-5">
			    <b class="inline-block mt-3">Password</b>
			    <input class="float-right" type="password" name="password" placeholder="Password">
			</div>
			
			<div class="overflow mt-10 pt-0">
			    <button class="button float-right">login</button>
			</div>
		    </form>
		</div>
	    </div>
	</div>
    </div>
@endsection
@section('content-right')
    <div class="section">
        <div class="section-header">
            <b>links</b>
        </div>
        <div class="section-body">
            <ul>
                <li>privacy statement</li>
            </ul>
        </div>
    </div>
@endsection
