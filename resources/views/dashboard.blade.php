@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container d-flex">
        <a href="/my-post" id="dash-link" class="m-5" style="padding: 20px;">
            <div class="container bg-primary m-3 d-flex align-items-center justify-content-around">
                <span class="text-white float-right" id="text">View post</span><br>
            </div>
        </a>

    </div>

@endsection
