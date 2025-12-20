@extends('layout.page')
{{-- Justification: Emacs doesn't like it when I don't close section. So I have to do this --}}
@section('title') {{ __('welcome') }} @endsection
@section('content-left')
    <div class="section">
        <div class="section-header">
            <b>news</b>
        </div>
        <div class="section-body">
            <div class="news">
                <b><img src="{{ asset('/images/silk/newspaper.png') }}" class="icon silk"> news title</b>
                
                <div class="float-right inline-block">
                    <span class="caption">9 days ago</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
            </div>
            <div class="news">
                <b><img src="{{ asset('/images/silk/newspaper.png') }}" class="icon silk"> 9/11 2.0</b>
                
                <div class="float-right inline-block">
                    <span class="caption">11 days ago</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
            </div>
            <div class="news">
                <b><img src="{{ asset('/images/silk/newspaper.png') }}" class="icon silk"> dickbutt 9/11</b>
                
                <div class="float-right inline-block">
                    <span class="caption">16 days ago</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
            </div>
            <div class="news">
                <b><img src="{{ asset('/images/silk/newspaper.png') }}" class="icon silk"> towers built</b>
                
                <div class="float-right inline-block">
                    <span class="caption">21 days ago</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section mt-10">
        <div class="section-header">
            <b>links</b>
        </div>
        <div class="section-body">
            <ul>
                <li>r</li>
                <li>sign up</li>
                <li>sign up</li>
                <li>sign up</li>
                <li>sign up</li>
            </ul>
        </div>
    </div>
@endsection
@section('content-center')
    <div class="center-cutout-section">
	<h3>What is <b>Ruffy?</b></h3><br>
	<b>Ruffy</b> is an old roblox revival meant to revive the 2013M client. If you read this you are gay. If you read this you are gay. If you read this you are gay. If you read this you are gay. If you read this you are gay. If you read this you are gay. If you read this you are gay. If you read this you are gay. If you read this you are gay. If you read this you are gay. If you read this you are gay. If you read this you are gay. If you read this you are gay. If you read this you are gay. If you read this you are gay. If you read this you are gay. If you read this you are gay. If you read this you are gay. <br>
	
	<h3 class="mt-10 mb-10">Register</h3>
	
	<div class="cutout">
            <form action="" method="POST">
		<div class="overflow">
                    <b class="inline-block mt-3">Username</b>
                    <input class="float-right" type="text" name="username" placeholder="john">
		</div>
		<div class="overflow mt-5">
                    <b class="inline-block mt-3">Password</b>
                    <input class="float-right" type="password" name="password" placeholder="Password">
		</div>
		
		<div class="overflow mt-10 pt-0">
                    <button class="button float-right">register</button>
		</div>
            </form>
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
                <li>r</li>
                <li>sign up</li>
                <li>sign up</li>
                <li>sign up</li>
                <li>sign up</li>
            </ul>
        </div>
    </div>
@endsection
