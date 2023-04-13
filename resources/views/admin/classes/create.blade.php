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
                <form class="forms-sample" action="{{ route('classe.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="exampleSelectGender" class="text-light">Day</label>
                        <select class="form-control text-light "  @error('day') is-invalid @enderror" name="day" rows="4" value="{{ old('day') }}">
                          <option class="text-light">Manday</option>
                          <option class="text-light">Tuesday</option>
                          <option class="text-light">Wednesday</option>
                          <option class="text-light">Thursday</option>
                          <option class="text-light">Friday</option>
                          <option class="text-light">Saturday</option>
                          <option class="text-light">Sunday</option>
                        </select>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Time</label>
                        <div>
                          <input class="form-control text-light" placeholder="h:m-h:m" />
                        </div>
                      </div>
                      
                    <div class="form-group">
                        <label for="exampleSelectGender" class="text-light">Type</label>
                        <select class="form-control text-light "  @error('type') is-invalid @enderror" name="type" rows="4" value="{{ old('type') }}">
                          <option class="text-light">POWER LIFTING</option>
                          <option class="text-light">BODY BUILDING</option>
                          <option class="text-light">CARDIO PROGRAM</option>
                          <option class="text-light">WEIGHT LOOSE</option>
                          <option class="text-light">FITNESS PROGRAM</option>
                          <option class="text-light">CROSSFIT CLASS</option>
                          <option class="text-light">MUSCLE BUILDING</option>
                          <option class="text-light">YOGA CLASS</option>
                        </select>
                      </div>

                    <div class="form-group">
                      <label >Name</label>
                      <input class="form-control  text-light @error('name') is-invalid @enderror" name="name" rows="4" value="{{ old('name') }}">
                      @error('name')
                          <div class="alert alert-danger m-2">{{ $message }}</div>
                      @enderror
                    </div>

                




                  
                  <button type="submit" class="btn btn-primary me-2 m-2">Submit</button>
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