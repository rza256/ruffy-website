@extends('layout.page')
@section('title') {{ __('home') }} @endsection
@section('content-left')
    @include('components.news')
    @include('components.friends')
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
                <b>emi</b> <span class="caption">9 minutes ago</span> <img src="{{ asset('/images/silk/user.png') }}" class="icon silk">
                <div class="comment-text">
                    orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content-right')
    @include('components.recent_games')
@endsection
