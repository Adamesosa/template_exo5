<header>
    @php
        $urlActuelle =request()->path() == '/' ? 'home' : request()->path() 
    @endphp
    
    <nav class=" row navbar navbar-expand-lg navbar-dark bg-dark m-0 ">
        <div class="container">
        <a class="titreSite navbar-brand col title" href="/">{{env('APP_NAME')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-4" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('service')}}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Contact</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <div class="container">
        <h1> {{$urlActuelle}} Suheading</h1>
        <div aria-label="breadcrumb container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$urlActuelle}} </li>
            </ol>
        </div>
    </div>
      
</header>
