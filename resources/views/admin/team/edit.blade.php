@include('admin.pages.stayle')


  <body>
    <div class="container-scroller">
 
      <!-- partial:partials/_sidebar.html -->
    @include('admin.pages.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('admin.pages.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <!-- content-wrapper ends -->
     
          

          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Create Trainers</h4>
                <form class="forms-sample" action="{{ route('train.update',['train'=>$train->id]) }}" method="POST" enctype="multipart/form-data">
                  @method('put')
                    @csrf

                    <div class="form-group">
                      <label >Name</label>
                      <input class="form-control  text-light @error('name') is-invalid @enderror" name="name" rows="4" value="{{ $train->name }}">
                      @error('name')
                          <div class="alert alert-danger m-2">{{ $message }}</div>
                      @enderror
                    </div>

                

                    <div class="form-group">
                      <label >Phone</label>
                      <input class="form-control  text-light @error('phone') is-invalid @enderror" name="phone" rows="4" value="{{ $train->phone }}">
                      @error('phone')
                          <div class="alert alert-danger m-2">{{ $message }}</div>
                      @enderror
                    </div>

                
           

                    <div class="form-group">
                      <label for="exampleSelectGender" class="text-light">Type</label>
                      <select class="form-control text-light "  @error('age') is-invalid @enderror" name="type" rows="4" value="{{ $train->type }}">
                        <option class="text-light">Man</option>
                        <option class="text-light">Women</option>
                        <option class="text-light">Children</option>
                        <option class="text-light">Old</option>
                      </select>
                    </div>


                    <div class="form-inline">
                      <label >Link to Telegram</label>
                      <input class="form-control  text-light"  @error('link') is-invalid @enderror name="link" rows="4" value="{{ $train->link }}">
                      @error('link')
                          <div class="alert alert-danger m-2">{{ $message }}</div>
                      @enderror
                    </div>

                 

                  <div class="form-group mt-4">
                    <label>File upload</label>
                      <input type="file" name="photo" class="form-control  text-light"  rows="4">
                    @error('photo')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                    @enderror
                    <img style="width: 80px" src="{{ asset('storage/'.$train->photo) }}" alt="">
                  </div>



                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
              </div>
            </div>
          </div>















          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

  </body>
</html>