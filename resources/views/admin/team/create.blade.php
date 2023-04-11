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
                <form class="forms-sample" action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label >Title</label>
                      <input class="form-control  text-light @error('title') is-invalid @enderror" name="title" rows="4" value="{{ old('title') }}">
                      @error('title')
                          <div class="alert alert-danger m-2">{{ $message }}</div>
                      @enderror
                    </div>

                  {{-- <div class="form-group">
                    <label for="exampleSelectGender">Gender</label>
                    <select class="form-control" id="exampleSelectGender">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div> --}}

                  <div class="form-group">
                    <label>File upload</label>
                      <input type="file" name="photo" class="form-control  text-light @error('photo') is-invalid @enderror " id="subject" rows="4" value="{{ old('photo') }}">
                    @error('photo')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                    @enderror
                  </div>

                 
                  <div class="form-group">
                    <label >Content</label>
                    <textarea class="form-control  text-light @error('content') is-invalid @enderror" name="content" rows="4">{{ old('content') }}</textarea>
                    @error('content')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                  @enderror
                  </div>

                  <div class="form-group">
                    <label >Description</label>
                    <textarea class="form-control  text-light @error('description') is-invalid @enderror" name="description" rows="4">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="alert alert-danger m-2">{{ $message }}</div>
                  @enderror
                  </div>


                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>
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