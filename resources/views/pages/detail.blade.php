@include('layouts.stayl')

<body>
  @include('layouts.header')


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Blog Detail</h1>
                {{-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="" class="btn btn-light py-md-3 px-md-5">Edit</a> --}}
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container-fluid p-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="{{ asset('storage/'.$blog->photo)}}" alt="">
                    
                    <h1 class="text-uppercase mb-4">{{ $blog->title }}</h1>
                    <h6>{{ $blog->created_at }}</h6>
                    <h5>{{ $blog->content }}</h5>
                    <p>{{ $blog->description }}</p>
                   
                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4">3 Comments</h3>
                    <div class="d-flex mb-4">
                        <img src="{{ asset('img/user.jpg')}}"class="img-fluid rounded" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-secondary">Reply</button>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <img src="{{ asset('img/user.jpg')}}"class="img-fluid rounded" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-secondary">Reply</button>
                        </div>
                    </div>
                    <div class="d-flex ms-5 mb-4">
                        <img src="{{ asset('img/user.jpg')}}"class="img-fluid rounded" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-secondary">Reply</button>
                        </div>
                    </div>
                </div>
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <div class="bg-dark rounded p-5">
                    <h3 class="text-light text-uppercase mb-4">Leave a comment</h3>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-white border-0" placeholder="Website" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4">Categories</h3>
                    <div class="d-flex flex-column justify-content-start bg-dark rounded p-4">
                        <a class="fs-5 fw-bold text-light text-uppercase mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Web Design</a>
                        <a class="fs-5 fw-bold text-light text-uppercase mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Web Development</a>
                        <a class="fs-5 fw-bold text-light text-uppercase mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Web Development</a>
                        <a class="fs-5 fw-bold text-light text-uppercase mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Keyword Research</a>
                        <a class="fs-5 fw-bold text-light text-uppercase" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Email Marketing</a>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4">Recent Post</h3>
                    <div class="bg-dark rounded p-4">
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0 rounded-start" src="{{ asset('img/blog-1.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-light rounded-end h5 text-uppercase p-3 mb-0">Sed amet tempor amet sit kasd sea lorem
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0 rounded-start" src="{{ asset('img/blog-2.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-light rounded-end h5 text-uppercase p-3 mb-0">Sed amet tempor amet sit kasd sea lorem
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0 rounded-start" src="{{ asset('img/blog-3.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-light rounded-end h5 text-uppercase p-3 mb-0">Sed amet tempor amet sit kasd sea lorem
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0 rounded-start" src="{{ asset('img/blog-1.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-light rounded-end h5 text-uppercase p-3 mb-0">Sed amet tempor amet sit kasd sea lorem
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden">
                            <img class="img-fluid flex-shrink-0 rounded-start" src="{{ asset('img/blog-2.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-light rounded-end h5 text-uppercase p-3 mb-0">Sed amet tempor amet sit kasd sea lorem
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-dark m-1">Design</a>
                        <a href="" class="btn btn-dark m-1">Development</a>
                        <a href="" class="btn btn-dark m-1">Marketing</a>
                        <a href="" class="btn btn-dark m-1">SEO</a>
                        <a href="" class="btn btn-dark m-1">Writing</a>
                        <a href="" class="btn btn-dark m-1">Consulting</a>
                        <a href="" class="btn btn-dark m-1">Design</a>
                        <a href="" class="btn btn-dark m-1">Development</a>
                        <a href="" class="btn btn-dark m-1">Marketing</a>
                        <a href="" class="btn btn-dark m-1">SEO</a>
                        <a href="" class="btn btn-dark m-1">Writing</a>
                        <a href="" class="btn btn-dark m-1">Consulting</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Plain Text Start -->
                <div>
                    <h3 class="text-uppercase mb-4">Plain Text</h3>
                    <div class="bg-dark rounded text-center text-light" style="padding: 30px;">
                        <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                        <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->

@include('layouts.footer')