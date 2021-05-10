@extends('layouts.index')

@section('titre_page')
    home
@endsection
@section('content')
<div class="jumbotron text-center">
    <h1 class="display-4">Hello CodingSchool</h1>
    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero molestias totam excepturi delectus.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="/about" role="button">About</a>
    </p>   
</div>
<div class="text-center">
    <h3>Bonus :</h3>
    <p> <span class="font-weight-bold">Url actuelle :</span> {{$urlCurrent}}</p>
    <p> <span class="font-weight-bold">Url précédent :</span>{{$urlPrevious}}</p>
</div>
<hr>
<div class="text-center">
    <h3>Add ICON :</h3>
    <p> <span class="font-weight-bold">Type solid :</span><i class="fas fa-balance-scale"></i></p>
    <p> <span class="font-weight-bold">Type regular :</span><i class="far fa-bell"></i></p>
    <p> <span class="font-weight-bold">Type brands :</span><i class="fab fa-btc"></i></p>
</div>
@endsection

