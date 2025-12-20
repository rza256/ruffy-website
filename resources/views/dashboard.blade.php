@extends('layout.page')
@section('title') {{ __('home') }} @endsection
@section('content-left')
    <div class="section">
        <div class="section-header">
            <b>news</b>
        </div>
        <div class="section-body">
            <div class="news">
                <b><img src="https://hjonk.me/images/silk/newspaper.png" class="icon silk"> news title</b>
                
                <div class="float-right inline-block">
                    <span class="caption">9 days ago</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
            </div>
            <div class="news">
                <b><img src="https://hjonk.me/images/silk/newspaper.png" class="icon silk"> 9/11 2.0</b>
                
                <div class="float-right inline-block">
                    <span class="caption">11 days ago</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
            </div>
            <div class="news">
                <b><img src="https://hjonk.me/images/silk/newspaper.png" class="icon silk"> dickbutt 9/11</b>
                
                <div class="float-right inline-block">
                    <span class="caption">16 days ago</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
            </div>
            <div class="news">
                <b><img src="https://hjonk.me/images/silk/newspaper.png" class="icon silk"> towers built</b>
                
                <div class="float-right inline-block">
                    <span class="caption">21 days ago</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section mt-10">
        <div class="section-header">
            <b>friends</b>
        </div>
        <div class="section-body">
            <div class="news">
                <b><img src="https://hjonk.me/images/silk/status_offline.png" class="icon silk no-filter"> 
                    <div class="hover-marquee">
			<span class="short-text">aza.comazots</span>
			<marquee class="long-text">aza.comazots</marquee>
                    </div></b>
                
                <div class="float-right inline-block">
                    <span class="caption">2m ago</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
            </div>
            
            <div class="news">
                <b><img src="https://hjonk.me/images/silk/status_online.png" class="icon silk no-filter"> 
                    <div class="hover-marquee">
			<span class="short-text">emi</span>
			<marquee class="long-text">emi</marquee>
                    </div></b>
                
                <div class="float-right inline-block">
                    <span class="caption">online</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
            </div>
            <div class="news">
                <b><img src="https://hjonk.me/images/silk/status_offline.png" class="icon silk no-filter"> 
                    <div class="hover-marquee">
			<span class="short-text">rubenjordan</span>
			<marquee class="long-text">rubenjordan</marquee>
                    </div></b>
                
                <div class="float-right inline-block">
                    <span class="caption">1h ago</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
            </div>
            
            <div class="news">
                <b><img src="https://hjonk.me/images/silk/status_online.png" class="icon silk no-filter"> 
                    <div class="hover-marquee">
			<span class="short-text">noyal</span>
			<marquee class="long-text">noyal</marquee>
                    </div></b>
                
                <div class="float-right inline-block">
                    <span class="caption">online</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
            </div>
            
            <div class="news">
                <b><img src="https://hjonk.me/images/silk/status_online.png" class="icon silk no-filter"> 
                    <div class="hover-marquee">
			<span class="short-text">Carrot</span>
			<marquee class="long-text">Carrot</marquee>
                    </div>
                </b>
                
                <div class="float-right inline-block">
                    <span class="caption">online</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
	    </div>
        </div>
    </div>
@endsection
@section('content-center')
    <div class="center-cutout-section mb-10">
        <h3>your character</h3>
        <span class="caption float-right"><a href="">edit</a></span>
        <br>
        <img class="thumbnail your-character" src="{{ asset('/images/nooby.png') }}">
        <div class="blurb-container">
            <textarea placeholder="today i..."></textarea><br>
            <button class="float-right">update</button>
        </div>
    </div>
    
    <div class="center-cutout-section">
        <div class="comment">
            <img class="thumbnail w-64" src="{{ asset('/images/nooby.png') }}">
            <div class="comment-body">
                <b>emi</b> <span class="caption">9 minutes ago</span> <img src="https://hjonk.me/images/silk/user.png" class="icon silk">
                <div class="comment-text">
                    orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content-right')
    <div class="section">
        <div class="section-header">
            <b>recent games</b>
        </div>
        <div class="section-body">
            <div class="news">
                <b><img src="{{ asset('/images/silk/server.png') }}" class="icon silk no-filter"> 
                    <div class="hover-marquee">
			<span class="short-text">slide down 999 miles</span>
			<marquee class="long-text">slide down 999 miles</marquee>
                    </div>
                </b>
                
                <div class="float-right inline-block">
                    <span class="caption"><b>0</b> players</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
            </div>
            <div class="news">
                <b><img src="{{ asset('/images/silk/server.png') }}" class="icon silk no-filter"> 
                    <div class="hover-marquee">
			<span class="short-text">crossroads</span>
			<marquee class="long-text">crossroads</marquee>
                    </div>
                </b>
                
                <div class="float-right inline-block">
                    <span class="caption"><b>6</b> players</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
            </div>
            
            <div class="news">
                <b><img src="{{ asset('/images/silk/server.png') }}" class="icon silk no-filter"> 
                    <div class="hover-marquee">
			<span class="short-text">Charlie Kirk Obby</span>
			<marquee class="long-text">Charlie Kirk Obby</marquee>
                    </div>
                </b>
                
                <div class="float-right inline-block">
                    <span class="caption"><b>21</b> players</span>
                    <span class="ml-5"><a href="#">view</a></span>
                </div>
	    </div>
        </div>
    </div>
@endsection
