@include('layouts.stayl')

<body>
  @include('layouts.header')

 
 
 <!-- Hero Start -->
 <div class="container-fluid bg-primary p-5 bg-hero mb-5">
    <div class="row py-5">
        <div class="col-12 text-center">
            <h1 class="display-2 text-uppercase text-white mb-md-4">Trainers</h1>
            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
            <a href="" class="btn btn-light py-md-3 px-md-5">Trainers</a>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Team Start -->
<div class="container-fluid p-5">
    <div class="mb-5 text-center">
        <h5 class="text-primary text-uppercase">The Team</h5>
        <h1 class="display-3 text-uppercase mb-0">Expert Trainers</h1>
    </div>
    <div class="row g-5">
        @foreach ($trainers as $trainer)
            
        <div class="col-lg-4 col-md-6">
            <div class="team-item position-relative">
                <div class="position-relative overflow-hidden rounded">
                    <img class="img-fluid w-100" src="{{ asset('storage/'.$trainer->photo)}}" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square rounded-circle mx-1" href="{{ $trainer->link }}"><i class="fab fa-telegram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                    <h5 class="text-uppercase text-light">{{ $trainer->name }}</h5>
                    <h6 class="text-uppercase text-secondary m-1">Trainer: {{ $trainer->type }}</h6>
                    <p class="text-uppercase text-secondary m-1">Tel: {{ $trainer->phone }}</p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
<!-- Team End -->
@include('layouts.footer')