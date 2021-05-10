@extends('layouts.index')

@section('titre_page')
    about
@endsection

@section('content')
    <div class="card my-5" style="">
        <div class="row no-gutters">
            <div class="col-md-6">
                <img src="{{asset('img/test.jpg')}}" class="card-img" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>
@endsection